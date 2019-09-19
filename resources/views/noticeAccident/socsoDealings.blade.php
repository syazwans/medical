<div class="card">
    <div class="col-12">
     <div class="card-body">
        <form action="/" id="form_claim_notice_info">
            {{ csrf_field() }}
            <div class="form-body">
                <h3 class="card-title">@lang('socso.title')</h3>
                <hr>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> @lang('socso.attr.state')</label>
                            <select name="state1" id="state1" class="form-control custom-select" onchange="statechange()">
                                @foreach($state as $S)
                                     <option value="{{$S->refcode}}">{{$S->descen}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--/span-->
                    <div class="col-md-6">
                     <div class="form-group">
                        <label>@lang('socso.attr.city')</label>
                        <select name="brname" id="brname" class="form-control custom-select" >
                            <option value=""></option>
                                   <!--  @foreach($branch as $B)
                                      <option value="{{$B->brcode}}">{{$B->brname}}</option>
                                      @endforeach -->
                                  </select>
                              </div>
                          </div>
                          
                          <!--/span-->
                      </div>
                      <!--/row-->
            <!-- <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>@lang('socso.attr.city_origin')</label>
                    <select class="form-control custom-select">
                        {{-- <option>@lang('confirmation.choose5')</option> --}}
                        {{-- <option>Kuala Lumpur</option>
                        <option>Petaling Jaya</option>
                        <option>Rawang</option>
                        <option>Klang</option>
                        <option>Kajang</option>
                        <option>Tanjung Karang</option>
                        <option>Ipoh</option>
                        <option>Taiping</option>
                        <option>Kuala Kangsar</option>
                        <option>Tapah</option>
                        <option>Teluk Intan</option>
                        <option>Manjung</option>
                        <option>Seberang Jaya</option>
                        <option>George Town</option>
                        <option>Alor Setar</option>
                        <option>Langkawi</option>
                        <option>Sungai Petani</option>
                        <option>Kulim</option>
                        <option>Kangar</option>
                        <option>Seremban</option>
                        <option>Kuala Pilah</option>
                        <option>Ayer Keroh</option>
                        <option>Johor Bahru</option>
                        <option>Muar</option>
                        <option>Batu Pahat</option>
                        <option>Kluang</option>
                        <option>Segamat</option>
                        <option>Kuantan</option>
                        <option>Temerloh</option>
                        <option>Bentong</option>
                        <option>Kuala Terengganu</option>
                        <option>Kemaman</option>
                        <option>Dungun</option>
                        <option>Kota Bharu</option>
                        <option>Kuala Krai</option>
                        <option>Labuan</option>
                        <option>Kota Kinabalu</option>
                        <option>Tawau</option>
                        <option>Lahad Datu</option>
                        <option>Keningau</option>
                        <option>Sandakan</option>
                        <option>Kota Marudu</option>
                        <option>Beaufort</option>
                        <option>Kuching</option>
                        <option>Miri</option>
                        <option>Sri Aman</option>
                        <option>Bintulu</option>
                        <option>Sibu</option>
                        <option>Kapit</option>
                        <option>Sarikei</option>
                        <option>Mukah</option>
                        <option>Limbang</option>
                        <option>Serian</option>
                    </select>
                    <small class="form-control-feedback"> If there is a change of office </small> </div>
                </div> -->
                <!--/span-->
              <!--  <div class="col-md-6">
                   <div class="form-group">
                    <label>@lang('socso.attr.state_origin')</label>
                    <select class="form-control custom-select">
                       <option>@lang('confirmation.choose6')</option> --}}
                        {{-- <option>Wilayah Persekutuan Kuala Lumpur</option>
                        <option>Selangor</option>
                        <option>Perak</option>
                        <option>Pulau Pinang</option>
                        <option>Kedah</option>
                        <option>Perlis</option>
                        <option>Negeri Sembilan</option>
                        <option>Melaka</option>
                        <option>Johor</option>
                        <option>Pahang</option>
                        <option>Terengganu</option>
                        <option>Kelantan</option>
                        <option>Wilayah Persekutuan Labuan</option>
                        <option>Sabah</option>
                        <option>Sarawak</option>
                    </select>
                    <small class="form-control-feedback"> If there is a change of office </small> </div>
                </div>
            </div> -->
        </div>
        <div class="form-actions">
            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button>
            <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>@lang('insuredPerson.save')</button>  
        </div>
    </form>
</div>
</div>
</div>


