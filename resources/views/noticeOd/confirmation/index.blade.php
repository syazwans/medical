<div class="tab-pane  p-20" id="confirmation" role="tabpanel">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body wizard-content">
                    <h3 class="card-title">@lang('confirmation.title')</h3>
                    <hr>
                    <form action="#">
                        <!-- Step 1 -->
                        @include('noticeOd.confirmation.step1')
                        {{-- <!-- Step 2 -->
                        @include('noticeOd.confirmation.step2')
                        <!-- Step 3 -->
                        @include('noticeOd.confirmation.step3')
                        <!-- Step 4 -->
                        @include('noticeOd.confirmation.step4')
                        <!-- Step 5 -->
                        @include('noticeOd.confirmation.step5')
                        <!-- Step 6 -->
                        @include('noticeOd.confirmation.step6')
                        <!-- Step 7 -->
                        @include('noticeOd.confirmation.step7') --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
