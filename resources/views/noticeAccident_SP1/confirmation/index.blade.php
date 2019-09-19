<div class="tab-pane  p-20" id="confirmation" role="tabpanel">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body wizard-content">
                    <h3 class="card-title">@lang('confirmation.title')</h3>
                    <hr>
                    <form action="#" >
                        <!-- Step 1 -->
                        @include('noticeAccident.confirmation.step1')
                        <!-- Step 2 -->
                        {{-- @include('noticeAccident.confirmation.step2')
                        <!-- Step 3 -->
                        @include('noticeAccident.confirmation.step3')
                        <!-- Step 4 -->
                        @include('noticeAccident.confirmation.step4')
                        <!-- Step 5 -->
                        @include('noticeAccident.confirmation.step5')
                        <!-- Step 6 -->
                        @include('noticeAccident.confirmation.step6')
                        <!-- Step 7 -->
                        @include('noticeAccident.confirmation.step7') --}}
                    </form>
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>Submit</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
