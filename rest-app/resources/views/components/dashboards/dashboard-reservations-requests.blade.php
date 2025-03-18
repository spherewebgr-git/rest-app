<div class="card">
    <div class="card-header card-no-border total-revenue">
        <h4>Latest Reservation Requests</h4><a href="#!">View all and reserve</a>
    </div>
    <div class="card-body pt-0">
        <div class="table-order table-responsive custom-scrollbar">
            <table class=" w-100 tranaction-table">
                <thead>
                <tr>
                    <th>Customer</th>
                    <th class="text-center">Res. Date</th>
                    <th class="text-center">Res. Time</th>
                    <th class="text-center">People</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservation_requests as $resreq)
                <tr>
                    <td>
                        <div class="product-name">{{$resreq->customer_name}}</div>
                    </td>
                    <td class="f-14 f-w-500 text-center">{{date('d M, Y', strtotime($resreq->reservation_date))}}</td>
                    <td class="f-14 f-w-500 text-center">{{date('h:i', strtotime($resreq->reservation_time))}}</td>
                    <td class="text-center">
                        <div class="txt-primary"><span class="f-w-500 f-13">x {{$resreq->members}}</span></div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
