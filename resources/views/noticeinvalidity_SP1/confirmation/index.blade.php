<div class="tab-pane  p-20" id="confirmation" role="tabpanel">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body wizard-content">
                    <h3 class="card-title">@lang('confirmation.title')</h3>
                    <hr>
                    <form action="#" class="tab-wizard wizard-circle">
                         <!-- Step 1 -->
                         @include('noticeinvalidity.confirmation.step1')
                         {{-- <!-- Step 2 -->
                         @include('noticedeath.confirmation.step2')
                         <!-- Step 5 -->
                         @include('noticedeath.confirmation.step5')
                         <!-- Step 6 -->
                         @include('noticedeath.confirmation.step6')
                         <!-- Step 7 -->
                         @include('noticedeath.confirmation.step7')
                         <!-- Step 8 -->
                         @include('noticedeath.confirmation.step8')
                         <!-- Step 9 -->
                         @include('noticedeath.confirmation.step9')
                         <!-- Step 10 -->
                         @include('noticedeath.confirmation.step10')
                         <!-- Step 11 -->
                         @include('noticedeath.confirmation.step11') --}}
                    </form>
                     <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>Submit</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
