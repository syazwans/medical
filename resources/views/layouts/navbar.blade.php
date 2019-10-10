<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                    aria-expanded="false"><span class="hide-menu">Mark Jeckson</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
            <li class="nav-small-cap">--- PERSONAL</li>
            </li>
            @if (Session::get('loginrole')== 'PK')
            <li><a class="fcolor" href="/home"><i class="icon-home"></i>@lang('navbar.home')</a></li>
            <li> <a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><i
                        class="ti-layout-grid2"></i><span class="hide-menu">@lang('navbar.new_claim')</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a class="fcolor2" href="/noticetype">@lang('navbar.new_claim')</a></li>

                    <li> <a class="has-arrow fcolor2" href="javascript:void(0)" aria-expanded="false"><span
                                class="hide-menu">@lang('navbar.upload_doc')</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="/searchdocument">@lang('navbar.ob_profile')</a></li>
                            <li><a href="/searchdocument">@lang('navbar.claim_info')</a></li>

                        </ul>
                    </li>
                </ul>
            </li>
            {{--<li><a href="/testmc"><i class="icon-home"></i>Test MC</a></li>
            <li><a href="/testuploaddoc"><i class="icon-home"></i>Test Upload Doc</a></li>--}}

            
            @elseif(Session::get('loginrole') == 'SCO')
            <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
            <li><a href="/home"><i class="icon-home"></i>@lang('navbar.home')</a></li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">@lang('navbar.new_claim')</span></a>
                <ul aria-expanded="false" class="collapse">
                   <li><a href="/noticetype">@lang('navbar.new_claim')</a></li>
        
                   <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('navbar.upload_doc')</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/searchdocument">@lang('navbar.ob_profile')</a></li>
                        <li><a href="/searchdocument">@lang('navbar.claim_info')</a></li>
        
                    </ul>
                    </li>
                </ul>
            </li>
            
        
        
        @elseif(Session::get('loginrole') == 'ADM')
        <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
        <li><a href="/home"><i class="icon-home"></i>@lang('navbar.home')</a></li>
        <li><a href="/homeAdmin"><i class="icon-home"></i>@lang('navbar.Administartive Task')</a></li> --}}

        @elseif(Session::get('loginrole') == 'ROLOMB' || Session::get('loginrole') == 'ROLOSMB' || Session::get('loginrole') == 'ROLOMAB' || Session::get('loginrole') == 'ROMABHQ' || Session::get('loginrole') == 'ROLOSMAB')
            <li> <a class="waves-effect waves-dark fcolor" href="/medical/home" aria-expanded="false"><i class="icon-home"></i><span class="hide-menu">@lang('medical_board/index.nav.home')</span></a></li>
            {{-- <li> <a class="waves-effect waves-dark" href="/information" aria-expanded="false"><i class="icon-info"></i><span class="hide-menu">@lang('index.nav.information')</span></a></li> --}}
            {{-- <li> <a class="waves-effect waves-dark" href="/calender" aria-expanded="false"><i class="icon-calender"></i><span class="hide-menu">@lang('index.nav.calender') </span></a></li> --}}
            <li> <a class="waves-effect waves-dark fcolor" href="/takwim" aria-expanded="false"><i class="icon-note"></i><span class="hide-menu">@lang('medical_board/index.nav.takwim') </span></a></li>
           
            @elseif(Session::get('loginrole')=='abppp')
            <li><a  class=" waves-dark fcolor" href="/home_abppp"><i class="icon-home"></i>@lang('Medical Services')</a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="/abppp">@lang('Appointment')</a></li>
                <li><a href="/committee">@lang('Committee')</a></li>
                <li><a href="/campaign">@lang('Campaign')</a></li>
                <li></li>
                

            </ul>
            <li> </li>
            @elseif(Session::get('loginrole')=='aobppp')
            <li><a  class=" waves-dark fcolor" href="/home_aobppp"><i class="icon-home"></i>@lang('Medical Services')</a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="/aobppp">@lang('AOBPPP')</a></li>

            </ul>
            @elseif(Session::get('loginrole')=='acpp')
            <li><a  class=" waves-dark fcolor" href="/home_acpp"><i class="icon-home"></i>@lang('Medical Services')</a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="/acpp">@lang('ACPP')</a></li>

            </ul>
        </li>
            @elseif(Session::get('loginrole')=='MOHUK')
            <li><a  class="waves-effect waves-dark fcolor" href="/home_mohuk"><i class="icon-home"></i>@lang('Medical Services')</a></li>

            @elseif(Session::get('loginrole')=='moei')
            <li><a class=" waves-dark fcolor" href="/home_moei"><i class="icon-home"></i>@lang('navbar.home')</a></li>
            <li> <a class=" waves-dark fcolor" aria-expanded="false"><span class="hide-menu">@lang('Medical Services')</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="/newcase">@lang('New Case')</a></li>
                    <li><a href="/reportstatus">@lang('Report Status')</a></li>
                    <li><a href="/campaign">@lang('Campaign')</a></li>
                    <li></li>
    
                </ul>
                </li>
                <li>  </li>
            
        @endif
        </ul>
        </nav>
        <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        