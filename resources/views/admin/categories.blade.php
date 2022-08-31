@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.css"/>

        <table class="table table-striped" style="width: 1500px">
            <thead>
                <tr>
                    <th width="30px">#</th>
                    <th>عنوان</th>
                    <th>لینک</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tablecontents" >
            @foreach(\App\Models\Navitem::all() as $post)
                @if($post['dropdown-menu'])
                    <tr class="row1  mb-0" data-id="{{ $post->id }}">

                        <td class="pl-3"><i class="fa fa-sort"></i></td>
                        <td class="">{{ $post->name }}</td>
                        <td class="">{{ $post->link }}</td>
                        <td class="">{{ date('d-m-Y h:m:s',strtotime($post->created_at)) }}</td>

                        <td colspan="10" >
                            <table style="margin-right: 50px;width: 89%" class="table table-info ">
                                <tbody id="dropdowntabel">
                                @foreach(\App\Models\Navitem::all() as $post)
                                    @if($post['dropdown-item'] )
                                    <tr  class="row1" data-id="555">
                                        <td class="pl-3"><i class="fa fa-sort"></i></td>
                                        <td>{{ $post->name }}</td>
                                        <td>{{ $post->link }}</td>
                                    </tr >
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </td>

                    </tr>
                @elseif(! $post['dropdown-item'])
                    <tr class="row1" data-id="{{ $post->id }}">
                        <td class="pl-3"><i class="fa fa-sort"></i></td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->link }}</td>
                        <td>{{ date('d-m-Y h:m:s',strtotime($post->created_at)) }}</td>
                    </tr>
                @endif

            @endforeach


            </tbody>
        </table>


@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.12/datatables.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $( "#tablecontents" ).sortable({
                items: "tr",
                cursor: 'move',
                opacity: 0.6,
                update: function() {
                    updatePostOrder("#tablecontents");
                }
            });
            $( "#dropdowntabel" ).sortable({
                items: "tr",
                cursor: 'move',
                opacity: 0.6,
                update: function() {
                    updatePostOrder("#dropdowntabel");
                }
            });

            function updatePostOrder(id) {
                var order = [];
                var token = $('meta[name="csrf-token"]').attr('content');
                $(id + ' tr.row1').each(function(index, element) {
                    order.push({
                        id: $(this).attr('data-id'),
                        order: index
                    });
                });
                console.log(order);
                if (id === "#dropdowntabel") {
                    console.log('dropdownorder');
                } else if (id === "#tablecontents"){
                    console.log('tablecontents');
                }

                {{--$.ajax({--}}
                {{--    type: "POST",--}}
                {{--    dataType: "json",--}}
                {{--    url: "{{ url('posts/update-order') }}",--}}
                {{--    data: {--}}
                {{--        order: order,--}}
                {{--        _token: token--}}
                {{--    },--}}
                {{--    success: function(response) {--}}
                {{--        if (response.status == "success") {--}}
                {{--            console.log(response);--}}
                {{--        } else {--}}
                {{--            console.log(response);--}}
                {{--        }--}}
                {{--    }--}}
                {{--});--}}
            }

        });
    </script>
@endsection
