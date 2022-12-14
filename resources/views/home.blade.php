@extends('layouts.master')

@section('content')

    <div class="home-content">
        @foreach($categories as $category)

            <div class="container-md bg-white my-3 card custom-card ">
                <div class="d-flex my-card-header">

                    <p>{{$category->name}}</p>

                    <a class="more text-decoration-none text- me-auto ">
                        بیشتر
                        <i class="fa fa-chevron-left me-1"></i>
                    </a>

                </div>

                <div class="line"></div>

                <div class="card-body">
                    <div class="owl-carousel ">
                        @foreach($category->app()->take(15)->get() as $app)
                            <div class="carousel-response">
                                <a class="decoration-none" href="{{route('app.show', $app->slug)}}">
                                    <figure class="SimpleAppItem  ">
                                        <img src="{{$app->cover}}" class=" SimpleAppItem__image"/>
                                        <figcaption>
                                            <div class="SimpleAppItem__text">
                                                <div class="SimpleAppItem__title fs-14"
                                                     style="direction: rtl;">{{$app->title}}
                                                </div>
                                                <div class="SimpleAppItem__subtitle fs-12">
                                            <span>شبکه‌های اجتماعی&nbsp;
                                            </span>
                                                </div>
                                            </div>
                                        </figcaption>

                                    </figure>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        <div class="container-md bg-white my-3 card custom-card " style="">
            <div class="d-flex my-card-header">

                <p>دسته‌بندی‌های برنامه</p>

                <a class="more text-decoration-none text- me-auto ">
                    بیشتر
                    <i class="fa fa-chevron-left me-1"></i>
                </a>

            </div>

            <div class="line"></div>
            <div
                class="row mt-2 g-2 gx-2 d-flex justify-content-around footer-catergory" style="padding: 10px"
            >
                <div class="col-lg-4 col-md-6">
                    <div class=" d-flex justify-content-between category-list">
                        <p href="" class="mb-0">
                            <img src="images/app-category-entertainment.webp" alt=""/>
                            سرگرمی
                        </p>
                        <i class="fa-solid fa-chevron-left mt-2"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="btn d-flex justify-content-between category-list">
                        <p class="mb-0">
                            <img src="images/app-category-education.webp" alt=""/>
                            آموزش
                        </p>
                        <i class="fa-solid fa-chevron-left mt-2"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" d-flex justify-content-between category-list">
                        <p class="mb-0">
                            <img src="images/app-category-shopping.webp" alt=""/>
                            خرید
                        </p>
                        <i class="fa-solid fa-chevron-left mt-2"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" d-flex justify-content-between category-list">
                        <p class="mb-0">
                            <img src="images/app-category-social.webp" alt=""/>
                            سرگرمی
                        </p>
                        <i class="fa-solid fa-chevron-left mt-2"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" d-flex justify-content-between category-list">
                        <p class="mb-0">
                            <img src="images/app-category-photography.webp" alt=""/>
                            سرگرمی
                        </p>
                        <i class="fa-solid fa-chevron-left mt-2"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class=" d-flex justify-content-between category-list">
                        <p class="mb-0">
                            <img src="images/app-category-finance.webp" alt=""/>
                            سرگرمی
                        </p>
                        <i class="fa-solid fa-chevron-left mt-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-aria-div">
        <div class="card box-rounded bg-white text-aria mt-3">
            <p>
                به خودتان نگاهی بیندازید، آیا برای انجام هر کاری به گوشی خود سر
                نمی‌زنید؟ آیا به‌دنبال دانلود برنامه‌های اندرویدی نیستید که کارهایتان
                را آسان‌تر کنند؟ ما در بازار اپلیکیشن‌های اندروید، برای هر موضوعی که
                در ذهن شماست، برنامه داریم و امکان نصب و دانلود آن‌ها را با اینترنت
                نیم‌بها و با سپر امنیت بازار برایتان فراهم کرده‌ایم.
            </p>
            <p>
                اپلیکیشن‌های بازار در ۲۰ دسته‌ی مختلف منظم شده‌اند که در ادامه آن‌ها
                را برایتان معرفی می‌کنیم. کافی است موضوع مورد علاقه‌ی خود را انتخاب
                کنید و از بین صدها برنامه هر دسته، بهترین و کاربردی‌ترین اپ را دانلود
                کنید. فراموش نکنید که حتما به نظرات و امتیازی () که کاربران به
                برنامه‌ها داده‌اند نیز توجه کنید تا حافظه موبایل‌تان را با اپ‌های
                بهتری پر کنید.
            </p>
            <br />
            <br />
            <h4>دانلود برنامه‌های جدید اندرویدی</h4>
            <p>
                در صفحه اصلی بازار می‌توانید برنامه‌های جدید منتخب سردبیران و همینطور
                بروزرسانی‌های منتخب را ببینید و از هیچ برنامه جدیدی جا نمانید.
                بازی‌های جدید نیز در صفحه بازی‌های اندرویدی بازار به‌همین ترتیب مشخص
                هستند.
            </p>
            <h4>برنامه‌های شبکه‌های اجتماعی</h4>
            <p>
                امروز برای بسیاری از ما، گذران زندگی و کار بدون شبکه‌های اجتماعی
                امکان‌پذیر مثل واتساپ، اینستاگرام، تلگرام، توییتر، یوتیوب و ... نیست.
                هر برنامه‌ای که دوست دارید را انتخاب و ارتباط با جهان را آغاز کنید.
                جدیدترین بروزرسانی این اپ‌های بسیار پرطرفدار نیز به محض انتشار، در
                بازار قرار می‌گیرند و از طریق اطلاع‌رسانی‌ها (نوتیفیکیشن) شما را مطلع
                می‌کنند.
            </p>
            <h4>ابزارهای اندرویدی</h4>
            <p>
                گوشی شما با برنامه‌های دسته‌ی ابزارهای بازار، آچار فرانسه‌ است. از
                ماشین حساب، زنگ، یادآور و تقویم گرفته تا ابزارهای افزایش سرعت گوشی،
                قفل برنامه‌ها، افزایش عمر باتری، ارزیابی سرعت و مصرف اینترنت، تبدیل
                واحدها، بارکد ساز و بارکدخوان، قطب‌نما، چراغ قوه، ساخت نسخه‌ی پشتیبان،
                دفتر یادداشت، آنتی ویروس‌ها، حافظه‌ی ابری و بسیاری برنامه‌ی پرکاربرد
                دیگر.
            </p>
            <h4>اپلیکیشن‌های عکاسی و ویدیو و فیلم‌برداری</h4>
            <p>
                اگر دنبال برنامه‌هایی هستید که از گوشی خود بهتر و بیشتر استفاده کنید،
                به دسته‌های شخصی‌سازی و عکاسی و ویدیو سر بزنید. اپلیکیشن‌های تصاویر پس
                زمینه، قفل‌ها و برترین‌ برنامه‌های تغییر فضای گوشی را از دسته‌ی
                شخصی‌سازی نصب کنید. برنامه‌های ویرایش و ساخت عکس، ساخت ویدیو و چاپ عکس
                را نیز از دسته‌ي عکاسی و ویدیو دانلود کنید و دنیای فیلترها و ابزارهای
                تدوین را تجربه کنید.
            </p>
            <br />
            <p>
                از ابزارهای شخصی‌سازی نیز غافل نشوید و گوشی خود را با آن‌ها، به سبک
                خود تغییر دهید. مثلا زنگ گوشی، پس زمینه و صفحه کلید شخصی خود را دانلود
                کنید و با قفل فایل‌ها و برنامه‌ها کنترل موبایل خود را به دست بگیرید.
            </p>
            <h4>برنامه‌های امور مالی</h4>
            <p>
                حوزه‌ی سرمایه و پول هر روز در حال تغییر و پیشرفت است. دسته‌ی امور مالی
                برنامه‌های کاربردی‌ای مثل رمز پویا، روش‌های انتقال پول، همراه بانک‌ها،
                حسابداری شخصی تا برنامه‌های تحلیلی بازار بورس و سرمایه‌گذاری، فروش
                سهام عدالت، قوانین مالی و محاسبات حقوقی، محاسبه سود سپرده و وام را
                پوشش می‌دهد. همینطور با کمک برنامه‌های حسابداری شخصی، تحلیل بازار بورس
                و مالی می‌توانید سرمایه‌ خود را مدیریت کنید و دخل و خرج‌تان را محاسبه
                کنید.
            </p>
            <h4>اپ‌های آموزشی</h4>
            <p>
                آموزش مجازی این روزها حرف اول را می‌زند. اپلیکیشن‌هایی که بتوانند
                سریع‌ترین و شیرین‌ترین روش یادگیری موضوعات مثل زبان انگلیسی، آشپزی،
                درس‌های از دبستان تا کنکور، برنامه‌نویسی و بسیاری موضوعات دیگر را در
                دسترس قرار دهند، بیشترین طرفدار را دارند. این دسته، دنیایی از
                اپلیکیشن‌هاست که می‌توانید با دانلود آن‌ها هر موضوعی را یاد بگیرید.
                معروف‌ترین و پرطرفدارترین برنامه این دسته هم اپلیکیشن شاد مدارس است که
                دانش‌آموزان علاقه زیادی به آن دارند.(!)
            </p>
            <h4>برنامه‌های موسیقی و صداگذاری</h4>
            <p>
                برنامه‌های اندروید موسیقی، شما را به آخرین آلبوم‌ها و آهنگ‌های روز
                متصل می‌کند. با کمک این اپ‌ها می‌توانید پلی‌لیست‌ شخصی‌های خود را
                بسازید، روی ویدیوهای خود صدا بگذارید و اپلیکیشن‌های تغییر صدای مختلف
                را ببینید.
            </p>
            <h4>بازار کودک</h4>
            <p>
                بازی و یادگیری و برنامه، قصه، بازی‌های شاد و سرگرم کننده و برترین
                اپلیکیشن‌های کودک در دسته‌ی کودک بازار، ویژه کودکان شما است. امروز
                ارتباط کودکان با دنیای تکنولوژی غیرقابل انکار است. از دسته‌ی کودک
                براحتی انتخاب کنید که دوست دارید کودک شما با کدام برنامه‌‌ی اندرویدی،
                بازی کند و یاد بگیرد.
            </p>
            <br />
            <p>
                با فعال کردن «بازار کودک» از «بازار من» می‌توانید با خیال راحت گوشی
                هوشمند خود را در اختیار کودکان قرار دهید و خیالتان راحت باشد که
                محتواهای نامناسب برای فرزندتان نمایش داده نمی‌شود.
            </p>
            <h4>اپ‌های سرگرمی</h4>
            <p>
                داشتن گوشی هوشمند در عین حال که کاربردی است، سرگرم کننده هم هست.
                برنامه‌های دسته‌ی سرگرمی طیف متفاوتی از اپلیکیشن‌هایی است که می‌توانید
                بسته به حال و لحظه از بین آنها انتخاب کنید؛ اهل نقاشی دیجیتال هستید؟
                دوست دارید فیلم و سریال تماشا کنید؟ هر چیزی که بخواهید را می‌توانید در
                این دسته‌بندی پیدا کنید.
            </p>
            <h4>برنامه‌های ورزشی</h4>
            <p>
                با برنامه‌های اندرویدی بازار ببینید در دنیای ورزش چه می‌گذرد. فوتبال،
                والیبال، لیگ برتر و جام حذفی، المپیک و حاشیه‌ی دنیای ورزش، پخش زنده و
                هیاهوی بازی‌های فینال، برنامه‌های اخبار و پخش زنده ورزشی، همه و همه در
                بازار موجود هستند.
            </p>
            <h4>اپلیکیشن‌های مذهبی</h4>
            <p>
                دسته‌ی مذهبی طیف گسترده‌ای ازبرنامه‌های کاربردی و تخصصی این حوزه را در
                خود جای داده است. برنامه‌های پرکاربرد مذهبی مانند تقویم‌های اذان‌گو و
                اوقات شرعی و برنامه‌های آموزش حفظ و تلاوت قرآن، قرآن کتبی و صوتی،
                برنامه‌های ختم قرآن و حکایت‌های مذهبی را در دسته‌ی مذهبی به راحتی پیدا
                و دانلود کنید.
            </p>
            <h4>برنامه‌های سفر</h4>
            <p>
                ازار برنامه‌های اندروید، مقصد بی انتهایی است از اپلکیشن‌هایی که سفر
                کردن را راحت‌ترمی‌کند. خرید بلیط هواپیما و قطار تا انتخاب محل اقامت و
                تورهای مسافرتی، گردشگری و بوم‌گردی برنامه می‌خواهد. در این سفر
                برنامه‌های مسیریاب،
            </p>
            <br />
            <p>
                از نقشه‌های مسیریاب نیز برای جا‌به‌جایی در شهر کمک بگیرید. با
                اپلیکیشن‌های تاکسی‌های آنلاین در شهر رفت و آمد کنید. با دانلود
                برنامه‌های نمایش خلافی خودرو و خدمات تعمیر خودرو، با خیال راحت
                بحران‌ها را مدیریت کنید.
            </p>
            <h4>کتاب‌ها و مطبوعات اندرویدی</h4>
            <p>
                اگر اهل کتاب‌ هستید، این دسته کتابخانه‌ای صوتی و آنلاین برای شما است.
                اپلیکیشن‌های پادکست‌، نشریات انگلیسی زبان وآخرین اخبار روز در این دسته
                جمع شده‌اند. برنامه‌های کتابگردی، پادکست‌ها، خرید آنلاین کتاب، اخبار
                رسمی روز، داستان‌ها و قصه‌ها برای کودکان و نشریات انگلیسی زبان، همگی
                را می‌توانید از بازار دانلود کنید.
            </p>
            <h4>برنامه‌های پزشکی و سلامت و تناسب اندام</h4>
            <p>
                سلامتی و پزشکی هم در گوشی هوشمند جا دارد. برنامه‌های مراقبت از سلامتی
                و اطلاعات پزشکی و گرفتن نوبت دکتر و کمک‌های اولیه یک پزشک همراه است.
                سلامت، برنامه‌ریزی هم می‌خواهد. با اپلیکیشن‌های دسته‌ی تناسب اندام به
                راحتی برای سلامتی و بدن خود برنامه بریزید. با دانلود برنامه‌های تغذیه
                و رژیم برای خود هدف گذاری کنید. راحت‌تر بخوابید، با برنامه پیاده‌روی
                کنید و تمرین‌های روزانه و بدن‌سازی و ورزش خود را با کارهای روزانه‌ای
                مانند خرید هفتگی و روزانه تنظیم کنید.
            </p>
            <h4>برنامه‌های خرید اینترنتی</h4>
            <p>
                برای خرید هم می‌توانید سراغ بازار بیایید و آنلاین مواد غذایی، گوشی،
                خانه و اتومبیل بخرید. آخرین و بهترین قیمت‌ها را رصد کنید و از بین
                هزاران کالای موجود در سراسر ایران انتخاب کنید.
            </p>
            <h4>برنامه‌های آب‌ و هوا</h4>
            <p>
                برنامه‌های آب و هوا شما را در جریانی تغییرات لحظه‌ای و اخبار روز
                هواشناسی قرار می‌دهد. در عین حال می‌توانید کیفیت هوای محل زندگی خود را
                مداوم رصد کنید، تغییرات زمین و آمادگی پس از حوادثی مانند زلزله و سیل
                نیز نیاز به آموزش دارد که تمامی این اطلاعات در برنامه‌های این دسته در
                دسترس است.
            </p>
            <h4>برنامه‌های آشپزی Android</h4>
            <p>
                آب و هوای دنیای آشپزی با دانلود اپلیکیشن‌های این دسته مزده‌دارتر
                می‌شود. برنامه‌های آشپزی بازار برای هرسلیقه‌‌ای با هر میزان دسترسی به
                مواد غذایی دستور غذایی دارد. آنلاین با گوشی اندروید هوشمند خود مواد
                غذایی و میوه بخرید. با دستورهای جدید، پخت و پز کنید. با برنامه‌های
                آشپزی و رستوران، رستوران‌های جدید را بشناسید، غذا سفارش دهید و
                رستوران‌گردی کنید.
            </p>
            <h4>اپلیکیشن‌های سبک زندگی</h4>
            <p>
                هر فردی در طول روز برای بهتر و راحت‌تر زندگی کردن به برنامه‌های دسته‌ی
                سبک زندگی نیاز دارد. در دسته‌ی سبک زندگی می‌توانید برنامه‌های اندروید
                سلامت روان و خوشناسی را دانلود کنید؛ یا سری به برنامه‌های کاربردی
                بزنید و هر سرویس آنلاینی که در طول روز به آن نیاز دارید از خشکشویی تا
                تعمیرات خانه و طراحی داخلی را پیدا کنید.
            </p>

            <div class="collapse-icon text-center" id="collapse-icon">
                <i
                    class="fa fa-angle-down text-aria-icon"
                    style="cursor: pointer; height: 30px; width: 36px"
                ></i>
            </div>
        </div>
    </div>
@endsection
