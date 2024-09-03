<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<header style="top:0">
    <!-- Top Navbar -->
    <div class="header-top bg-violet text-gray-400 font-bold pt-2 pb-2 justify-between items-center">
        <div class="flex">
            <div class="widget col-xs-12 col-md-3 text-center">
                <ul class="styled-icons icon-sm icon-white xs-text-center flex">
                    <li><a href="" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="" data-toggle="tooltip" data-placement="bottom" title="X"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="" data-toggle="tooltip" data-placement="bottom" title="Flickr"><i class="fa fa-flickr"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="flex">
            <div class="mr-16">
                <i class="fa fa-search font16 text-violet"></i>
            </div>
            <div class="w-1/6">
                <a href="{{ route('switchLang', ['lang' => app()->getLocale() == 'en' ? 'fr' : 'en']) }}">
                    {{ __('header.eng') }}
                </a>
            </div>
        </div>
    </div>

    <!-- Middle Navbar -->
    <div class="middle-navbar">
        <div class="container">
            <div class="logo">
                <img src="images/logo_ccu.png" alt="Logo">
            </div>
            <nav class="main-nav">
                <details id="menu" open>
                    <summary><i class="fas fa-bars"></i></summary>
                    <ul>
                        <li><a href="/">{{ __('header.home') }}</a></li>
                        <li>
                            <a href="/courses">{{ __('header.courses') }}</a>
                            <div class="megamenu" id="megamenu1" style="width: 900px !important">
                                <div class="megamenu-row" style="height: 410px">
                                    <div class="col4">
                                        <h4>{{ __('header.courses.certified_courses') }}</h4>
                                        <ul>
                                            <li><a href="/courses">{{ __('header.courses.certified_courses.computer_science') }}</a></li>
                                            <li style="padding-right: 20px;"><a href="/courses">{{ __('header.courses.certified_courses.conflict_management') }}</a></li>
                                            <li><a href="/courses">{{ __('header.courses.certified_courses.psycho_social_agents') }}</a></li>
                                            <li><a href="/courses">{{ __('header.courses.certified_courses.humanitarian_logistics') }}</a></li>
                                            <li><a href="/courses">{{ __('header.courses.certified_courses.humanitarian_coordination') }}</a></li>
                                            <li><a href="/courses">{{ __('header.courses.certified_courses.female_leadership') }}</a></li>
                                            <li><a href="/courses">{{ __('header.courses.certified_courses.data_entry') }}</a></li>
                                            <li><a href="/courses">{{ __('header.courses.certified_courses.language_courses') }}</a></li>
                                            <li><a href="/courses">{{ __('header.courses.certified_courses.travel_agency') }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="col4">
                                        <h4>{{ __('header.courses.online_courses') }}</h4>
                                        <ul>
                                            <li><a href="/courses">{{ __('header.courses.online_courses.university_degrees') }}</a></li>
                                            <li><a href="/courses">{{ __('header.courses.online_courses.jwl') }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="col4">
                                        <h4>{{ __('header.courses.youth_training') }}</h4>
                                        <ul>
                                            <li><a href="/courses">{{ __('header.courses.youth_training.direct_apprenticeship') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                                                
                        <li>
                            <a href="/service">{{ __('header.services') }}</a>
                            <div class="megamenu" id="megamenu2" style="width: 500px !important; left: -150px">
                                <div class="megamenu-row" style="height: 230px">
                                    <div class="col6">
                                        <h4>{{ __('header.services.library') }}</h4>
                                        <ul>
                                            <li><a href="/services">{{ __('header.services.library.scientific_books') }}</a></li>
                                            <li><a href="/services">{{ __('header.services.library.reading_room') }}</a></li>
                                            <li><a href="/services">{{ __('header.services.library.online_consultation') }}</a></li>
                                            <li><a href="/services">{{ __('header.services.library.printing_room') }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="col6">
                                        <h4>{{ __('header.services.food_service') }}</h4>
                                        <ul>
                                            <li><a href="/services">{{ __('header.services.food_service.restoration') }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <li>
                            <a href="/chaplaincy">{{ __('header.chaplaincy') }}</a>
                            <div class="megamenu" id="megamenu3" style="width: 200px !important; left: 0px">
                                <div class="megamenu-row" style="height: {{ app()->getLocale() == 'en' ? '165px' : '180px' }}">
                                    <div>
                                        <ul>
                                            <li><a href="/chaplaincy">{{ __('header.chaplaincy.mass') }}</a></li>
                                            <li><a href="/chaplaincy">{{ __('header.chaplaincy.academic_conferences') }}</a></li>
                                            <li><a href="/chaplaincy">{{ __('header.chaplaincy.cultural_activities') }}</a></li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="/activity">{{ __('header.activities') }}</a>
                            <div class="megamenu" id="megamenu4" style="width: 200px !important; left: 0px">
                                <div class="megamenu-row" style="height: {{ app()->getLocale() == 'en' ? '140px' : '155px'}};">
                                    <div>
                                        <ul>
                                            <li><a href="#">{{ __('header.activities.youth_support') }}</a></li>
                                            <li><a href="#">{{ __('header.activities.jrs') }}</a></li>
                                            <li><a href="#">{{ __('header.activities.school_complex') }}</a></li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </li>
                    </ul>
                </details>
            </nav>
        </div>
    </div>
</header>
