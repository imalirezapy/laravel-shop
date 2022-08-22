<?php

namespace App\Models;

use App\Notifications\ActiveCodeNotification;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActiveCode extends Model
{
    use HasFactory;

    protected $table = 'active_codes';

    protected $fillable = [
        'user_id',
        'code',
        'expired_at'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeGenerateCode($query, $user)
    {
        $time = 50 + 20 * $user->activeCode()->count();

        if ($code = $this->getAliveCodeForUser($user)) {
            $code = $code->code;
        } else {
            do {
                $code = mt_rand(100000, 999999);
            } while ($this->checkCodeIsUnique($user, $code));

            // store the code
            $user->activeCode()->create([
                'code' => $code,
//                'expired_at' => now()->addSeconds($time)
                'expired_at' => now()->addSeconds($time)
            ]);

            // TODO Send Sms
            $user->notify(new ActiveCodeNotification($code, $user->phone));
        }

        $time = Carbon::parse($this->getAliveCodeForUser($user)->expired_at);
        $time = now()->diff($time, now());

        return $time->s + $time->i * 60;
    }

    private function checkCodeIsUnique($user, int $code)
    {
        return !! $user->activeCode()->whereCode($code)->first();
    }

    private function getAliveCodeForUser($user)
    {
        return $user->activeCode()->where('expired_at', '>', now())->first();
    }

    public function scopeVerifyCode($query, $code, User $user)
    {
        return !! $user->activeCode()->whereCode($code)->where('expired_at', '>', now())->first();
    }

}
