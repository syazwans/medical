<div class="tab-pane  p-20" id="dependantProfiles" role="tabpanel">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body wizard-content">
                          <h3 class="card-title">@lang('confirmation.title')</h3>
                          <hr>
                          <form action="#" class="tab-wizard wizard-circle">
                              <!-- Step 1 -->
                              @include('noticedeath.dependantProfiles.dependantProfiles')
                              <!-- Step 2 -->
                              @include('noticedeath.dependantProfiles.guardianDetails')
                              <!-- Step 5 -->
                              @include('noticedeath.dependantProfiles.dependantStudyDetails')
                              <!-- Step 6 -->
                              @include('noticedeath.dependantProfiles.applicantDetails') 
                              {{-- <!-- Step 7 -->
                              @include('noticedeath.confirmation.step7')
                              <!-- Step 8 -->
                              @include('noticedeath.confirmation.step8')
                              <!-- Step 9 -->
                              @include('noticedeath.confirmation.step9')
                              <!-- Step 10 -->
                              @include('noticedeath.confirmation.step10')
                              <!-- Step 11 -->
                              @include('noticedeath.confirmation.step11') --}}
                              
                            <div class="form-actions">
                                    <button type="button"
                                        class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button"
                                        class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i
                                            class="fa fa-check"></i>
                                        @lang('insuredPerson.save')</button>
    
                                </div>
                          </form>
               
                      </div>
                  </div>
              </div>
          </div>
      </div>
      