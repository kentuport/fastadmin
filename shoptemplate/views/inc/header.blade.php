<?php $hs = new Single('Шапка', 10, 1);

$menu = $hs->field('Меню', 'Пункт меню', 'repeat', true);
foreach ($menu as $elm){
	$ml [] = [$elm->field('Ссылка', 'text', ''), $elm->field('Заголовок', 'text', '')];
	$elm->end();
}

$catalogheadertext = $hs->field('Шапка', 'Каталог', 'text', true, 'Каталог');
$searchplaceholder = $hs->field('Шапка', 'Введите свой запрос', 'text', true, 'Введите свой запрос');
$searchshowall = $hs->field('Шапка', 'Поиск показать все', 'text', true, 'Показать все');
$worktime = $hs->field('Шапка', 'Пн-Вс: 09:00-21:00', 'text', true, 'Пн-Вс: 09:00-21:00');
$telnumber = $hs->field('Шапка', '(067)-777-77-77', 'text', true, '(067)-777-77-77');
$callbackbtn = $hs->field('Шапка', 'Обратный звонок', 'text', true, 'Обратный звонок');
?>

@if (Agent::isMobile() && !Agent::isTablet())
	<header>
		<div class="logo">
			<a href="{{Lang::link('/')}}"><img src="/images/logo.svg" alt=""></a>
		</div>
		<div class="icons">
			<div class="searchicon">
				<a href="{{Lang::link('/')}}">
					<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M22.8596 21.5045L16.1783 14.8232C17.4455 13.2587 18.2084 11.2697 18.2084 9.1042C18.2084 4.08417 14.1242 0 9.10415 0C4.08413 0 0 4.08417 0 9.1042C0 14.1242 4.08417 18.2084 9.1042 18.2084C11.2697 18.2084 13.2587 17.4455 14.8232 16.1783L21.5045 22.8597C21.6917 23.0468 21.995 23.0468 22.1822 22.8597L22.8597 22.1821C23.0468 21.995 23.0468 21.6916 22.8596 21.5045ZM9.1042 16.2917C5.14078 16.2917 1.91669 13.0676 1.91669 9.1042C1.91669 5.14078 5.14078 1.91669 9.1042 1.91669C13.0676 1.91669 16.2917 5.14078 16.2917 9.1042C16.2917 13.0676 13.0676 16.2917 9.1042 16.2917Z" fill="#1E1E1E"/>
					</svg>
				</a>
			</div>
			<div class="searchform">
				<form action="{{Lang::link('/search')}}" method="get">
					<input type="text" name="s" placeholder="{{$searchplaceholder}}">
					<span class="presearch">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.884 17.7646L13.3647 12.2452C14.4115 10.9528 15.0417 9.30976 15.0417 7.52086C15.0417 3.37388 11.6678 0 7.52082 0C3.37384 0 0 3.37388 0 7.52086C0 11.6678 3.37388 15.0417 7.52086 15.0417C9.30976 15.0417 10.9528 14.4115 12.2452 13.3647L17.7646 18.8841C17.9192 19.0386 18.1698 19.0386 18.3244 18.8841L18.8841 18.3244C19.0386 18.1698 19.0386 17.9191 18.884 17.7646ZM7.52086 13.4584C4.24673 13.4584 1.58335 10.795 1.58335 7.52086C1.58335 4.24673 4.24673 1.58335 7.52086 1.58335C10.795 1.58335 13.4584 4.24673 13.4584 7.52086C13.4584 10.795 10.795 13.4584 7.52086 13.4584Z" fill="#1E1E1E"/>
                </svg>
            </span>
					<a class="closesearch">
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.66295 6.00077L11.8627 0.80098C12.0458 0.61791 12.0458 0.321097 11.8627 0.13805C11.6796 -0.0449964 11.3828 -0.0450199 11.1998 0.13805L5.99999 5.33785L0.800231 0.13805C0.617161 -0.0450199 0.320349 -0.0450199 0.137302 0.13805C-0.0457441 0.321121 -0.0457675 0.617933 0.137302 0.80098L5.33707 6.00075L0.137302 11.2005C-0.0457675 11.3836 -0.0457675 11.6804 0.137302 11.8635C0.228826 11.955 0.348802 12.0007 0.468778 12.0007C0.588755 12.0007 0.708708 11.955 0.800254 11.8635L5.99999 6.6637L11.1998 11.8635C11.2913 11.955 11.4113 12.0007 11.5312 12.0007C11.6512 12.0007 11.7712 11.955 11.8627 11.8635C12.0458 11.6804 12.0458 11.3836 11.8627 11.2005L6.66295 6.00077Z" fill="#A0A0A0"/>
						</svg>
					</a>
					<div class="ajaxsearchresult" id="ajaxsearchresult">


					</div>
				</form>
			</div>
			<div class="userlogin">
				<a href="/user/login">
					<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M19.0886 14.6437C17.9195 13.4747 16.5281 12.6093 15.0099 12.0854C16.6359 10.9655 17.7042 9.0912 17.7042 6.97187C17.7042 3.55033 14.9205 0.766663 11.499 0.766663C8.07741 0.766663 5.29375 3.55033 5.29375 6.97187C5.29375 9.0912 6.36201 10.9655 7.98807 12.0854C6.46989 12.6093 5.07841 13.4747 3.90936 14.6437C1.8821 16.671 0.765625 19.3664 0.765625 22.2333H2.44271C2.44271 17.2397 6.50532 13.1771 11.499 13.1771C16.4926 13.1771 20.5552 17.2397 20.5552 22.2333H22.2323C22.2323 19.3664 21.1158 16.671 19.0886 14.6437ZM11.499 11.5C9.00216 11.5 6.97083 9.46871 6.97083 6.97187C6.97083 4.47503 9.00216 2.44375 11.499 2.44375C13.9958 2.44375 16.0271 4.47503 16.0271 6.97187C16.0271 9.46871 13.9958 11.5 11.499 11.5Z" fill="#1E1E1E"/>
					</svg>
				</a>
			</div>
			<div class="smallcart">
				<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.2432 24.5667H12.2449C12.2464 24.5667 12.2478 24.5664 12.2493 24.5664H32.4336C32.9305 24.5664 33.3674 24.2368 33.504 23.759L37.9571 8.17305C38.0531 7.83704 37.9858 7.4758 37.7756 7.1969C37.5651 6.918 37.2361 6.75391 36.8867 6.75391H9.67569L8.87987 3.17256C8.76651 2.66318 8.31482 2.30078 7.79297 2.30078H1.11328C0.498367 2.30078 0 2.79915 0 3.41406C0 4.02898 0.498367 4.52734 1.11328 4.52734H6.90002C7.04092 5.16197 10.7084 21.6658 10.9194 22.6153C9.73628 23.1296 8.90625 24.3092 8.90625 25.6797C8.90625 27.5212 10.4045 29.0195 12.2461 29.0195H32.4336C33.0485 29.0195 33.5469 28.5212 33.5469 27.9062C33.5469 27.2913 33.0485 26.793 32.4336 26.793H12.2461C11.6323 26.793 11.1328 26.2934 11.1328 25.6797C11.1328 25.0668 11.6306 24.5681 12.2432 24.5667ZM35.4108 8.98047L31.5937 22.3398H13.139L10.1703 8.98047H35.4108Z" fill="#1E1E1E"/>
					<path d="M11.1328 32.3594C11.1328 34.2009 12.631 35.6992 14.4726 35.6992C16.3141 35.6992 17.8124 34.2009 17.8124 32.3594C17.8124 30.5178 16.3141 29.0195 14.4726 29.0195C12.631 29.0195 11.1328 30.5178 11.1328 32.3594ZM14.4726 31.2461C15.0863 31.2461 15.5859 31.7456 15.5859 32.3594C15.5859 32.9731 15.0863 33.4727 14.4726 33.4727C13.8588 33.4727 13.3593 32.9731 13.3593 32.3594C13.3593 31.7456 13.8588 31.2461 14.4726 31.2461Z" fill="#1E1E1E"/>
					<path d="M26.8672 32.3594C26.8672 34.2009 28.3655 35.6992 30.2071 35.6992C32.0486 35.6992 33.5469 34.2009 33.5469 32.3594C33.5469 30.5178 32.0486 29.0195 30.2071 29.0195C28.3655 29.0195 26.8672 30.5178 26.8672 32.3594ZM30.2071 31.2461C30.8208 31.2461 31.3204 31.7456 31.3204 32.3594C31.3204 32.9731 30.8208 33.4727 30.2071 33.4727C29.5933 33.4727 29.0938 32.9731 29.0938 32.3594C29.0938 31.7456 29.5933 31.2461 30.2071 31.2461Z" fill="#1E1E1E"/>
				</svg>
				<span class="smallcartcounter">0</span>
			</div>
			<div class="togglebtn">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="mobilemenu">
			<div class="logo">
				<a href="{{Lang::link('/')}}"><img src="/images/logo.svg" alt=""></a>
			</div>
			<ul class="mainmenu">
				<li><a href="{{Lang::link('/products')}}">{{$catalogheadertext}}</a>
					<ul>
						@foreach($catsmenu as $cm)
							<li><a href="{{Lang::link('/products/'.$cm->slug)}}">{{$cm->title}}</a></li>
						@endforeach
					</ul>
				</li>
				@foreach($ml as $m)
					<li><a href="{{Lang::link('/'.$m[0])}}">{{$m[1]}}</a></li>
				@endforeach
			</ul>

			<div class="contactdata">
				<div class="item worktime">
					<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.64547 1.4223H4.35468V2.24259H9.64547V1.4223Z" fill="#1E1E1E"/>
						<path d="M3.53463 1.83241H2.72363V2.15149H3.53463V1.83241Z" fill="#1E1E1E"/>
						<path d="M11.2766 1.83241H10.4656V2.15149H11.2766V1.83241Z" fill="#1E1E1E"/>
						<path d="M12.0972 1.4223V2.97182H9.64561V1.83243H4.35482V2.97182H1.90326V1.4223H0.000488281V3.96516H13.9999V1.4223H12.0972Z" fill="#1E1E1E"/>
						<path d="M0.000488281 4.78557V14.0001H13.9999V4.78557H0.000488281ZM3.06014 12.4689H1.70477V11.6486H3.06014V12.4689ZM3.06014 10.6916H1.70477V9.87131H3.06014V10.6916ZM3.06014 8.91431H1.70477V8.09403H3.06014V8.91431ZM5.36894 12.4689H4.01384V11.6486H5.36894V12.4689ZM5.36894 10.6916H4.01384V9.87131H5.36894V10.6916ZM5.36894 8.91431H4.01384V8.09403H5.36894V8.91431ZM7.67776 12.4689H6.32266V11.6486H7.67776V12.4689ZM7.67776 10.6916H6.32266V9.87131H7.67776V10.6916ZM7.67776 8.91431H6.32266V8.09403H7.67776V8.91431ZM7.67776 7.13705H6.32266V6.31676H7.67776V7.13705ZM9.98659 12.4689H8.63149V11.6486H9.98659V12.4689ZM9.98659 10.6916H8.63149V9.87131H9.98659V10.6916ZM9.98659 8.91431H8.63149V8.09403H9.98659V8.91431ZM9.98659 7.13705H8.63149V6.31676H9.98659V7.13705ZM12.2957 10.6916H10.9403V9.87131H12.2957V10.6916ZM12.2957 8.91431H10.9403V8.09403H12.2957V8.91431ZM12.2957 7.13705H10.9403V6.31676H12.2957V7.13705Z" fill="#1E1E1E"/>
						<path d="M3.53463 0H2.72363V2.1516H3.53463V0Z" fill="#1E1E1E"/>
						<path d="M11.2766 0H10.4656V2.1516H11.2766V0Z" fill="#1E1E1E"/>
					</svg>
					<span>{{$worktime}}</span>
				</div>
				<div class="item call">
					<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M13.619 10.2746L11.6652 8.32084C10.9675 7.62308 9.78126 7.90221 9.50215 8.80928C9.29282 9.43729 8.59506 9.78617 7.96707 9.64659C6.57154 9.29771 4.68758 7.48352 4.33869 6.01822C4.12936 5.3902 4.54802 4.69244 5.17601 4.48314C6.08311 4.20403 6.36221 3.01783 5.66445 2.32007L3.71071 0.366326C3.15249 -0.122109 2.31518 -0.122109 1.82674 0.366326L0.500987 1.69208C-0.824767 3.08761 0.64054 6.78576 3.92003 10.0653C7.19953 13.3447 10.8977 14.8799 12.2932 13.4843L13.619 12.1585C14.1074 11.6003 14.1074 10.763 13.619 10.2746Z" fill="#1E1E1E"/>
					</svg>
					<a href="tel:{{$telnumber}}">{{$telnumber}}</a>
				</div>
			</div>
			<div class="callbackbtn">
				<a class="btn recall_modal_btn">{{$callbackbtn}}</a>
			</div>
		</div>
	</header>
@else
	<header>
		<div class="headercontainer">
			<div class="logo">
				<a href="{{Lang::link('/')}}"><img src="/images/logo.svg" alt=""></a>
			</div>
			<div class="searchform">
				<form action="{{Lang::link('/search')}}" method="get" autocomplete="off">
					<input type="text" name="s" placeholder="{{$searchplaceholder}}" autocomplete="off">
					<div class="ajaxsearchresult" id="ajaxsearchresult">
						<!-- res here -->

						<!--res end here -->
					</div>
				</form>
			</div>
			<div class="contactdata">
				<div class="item worktime">
					<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.64547 1.4223H4.35468V2.24259H9.64547V1.4223Z" fill="#1E1E1E"/>
						<path d="M3.53463 1.83241H2.72363V2.15149H3.53463V1.83241Z" fill="#1E1E1E"/>
						<path d="M11.2766 1.83241H10.4656V2.15149H11.2766V1.83241Z" fill="#1E1E1E"/>
						<path d="M12.0972 1.4223V2.97182H9.64561V1.83243H4.35482V2.97182H1.90326V1.4223H0.000488281V3.96516H13.9999V1.4223H12.0972Z" fill="#1E1E1E"/>
						<path d="M0.000488281 4.78557V14.0001H13.9999V4.78557H0.000488281ZM3.06014 12.4689H1.70477V11.6486H3.06014V12.4689ZM3.06014 10.6916H1.70477V9.87131H3.06014V10.6916ZM3.06014 8.91431H1.70477V8.09403H3.06014V8.91431ZM5.36894 12.4689H4.01384V11.6486H5.36894V12.4689ZM5.36894 10.6916H4.01384V9.87131H5.36894V10.6916ZM5.36894 8.91431H4.01384V8.09403H5.36894V8.91431ZM7.67776 12.4689H6.32266V11.6486H7.67776V12.4689ZM7.67776 10.6916H6.32266V9.87131H7.67776V10.6916ZM7.67776 8.91431H6.32266V8.09403H7.67776V8.91431ZM7.67776 7.13705H6.32266V6.31676H7.67776V7.13705ZM9.98659 12.4689H8.63149V11.6486H9.98659V12.4689ZM9.98659 10.6916H8.63149V9.87131H9.98659V10.6916ZM9.98659 8.91431H8.63149V8.09403H9.98659V8.91431ZM9.98659 7.13705H8.63149V6.31676H9.98659V7.13705ZM12.2957 10.6916H10.9403V9.87131H12.2957V10.6916ZM12.2957 8.91431H10.9403V8.09403H12.2957V8.91431ZM12.2957 7.13705H10.9403V6.31676H12.2957V7.13705Z" fill="#1E1E1E"/>
						<path d="M3.53463 0H2.72363V2.1516H3.53463V0Z" fill="#1E1E1E"/>
						<path d="M11.2766 0H10.4656V2.1516H11.2766V0Z" fill="#1E1E1E"/>
					</svg>
					<span>{{$worktime}}</span>
				</div>
				<div class="item call">
					<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M13.619 10.2746L11.6652 8.32084C10.9675 7.62308 9.78126 7.90221 9.50215 8.80928C9.29282 9.43729 8.59506 9.78617 7.96707 9.64659C6.57154 9.29771 4.68758 7.48352 4.33869 6.01822C4.12936 5.3902 4.54802 4.69244 5.17601 4.48314C6.08311 4.20403 6.36221 3.01783 5.66445 2.32007L3.71071 0.366326C3.15249 -0.122109 2.31518 -0.122109 1.82674 0.366326L0.500987 1.69208C-0.824767 3.08761 0.64054 6.78576 3.92003 10.0653C7.19953 13.3447 10.8977 14.8799 12.2932 13.4843L13.619 12.1585C14.1074 11.6003 14.1074 10.763 13.619 10.2746Z" fill="#1E1E1E"/>
					</svg>
					<a href="tel:{{$telnumber}}">{{$telnumber}}</a>
				</div>
			</div>
			<div class="callbackbtn">
				<a class="btn recall_modal_btn">{{$callbackbtn}}</a>
			</div>

			<a href="{{Lang::link('/user')}}" class="userlogin <?php if (Auth::check()) :?>userauth<?php endif;?>">
				<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M24.8995 19.1005C23.3747 17.5757 21.5597 16.4469 19.5795 15.7635C21.7004 14.3028 23.0938 11.8581 23.0938 9.09375C23.0938 4.63087 19.4629 1 15 1C10.5371 1 6.90625 4.63087 6.90625 9.09375C6.90625 11.8581 8.29963 14.3028 10.4206 15.7635C8.44034 16.4469 6.62538 17.5757 5.10052 19.1005C2.45627 21.7448 1 25.2605 1 29H3.1875C3.1875 22.4866 8.48656 17.1875 15 17.1875C21.5134 17.1875 26.8125 22.4866 26.8125 29H29C29 25.2605 27.5437 21.7448 24.8995 19.1005ZM15 15C11.7433 15 9.09375 12.3505 9.09375 9.09375C9.09375 5.837 11.7433 3.1875 15 3.1875C18.2567 3.1875 20.9062 5.837 20.9062 9.09375C20.9062 12.3505 18.2567 15 15 15Z" fill="#1E1E1E"/>
					<line x1="2" y1="28" x2="28" y2="28" stroke="#1E1E1E" stroke-width="2"/>
				</svg>
			</a>

			<div class="smallcart">
				<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.2432 24.5667H12.2449C12.2464 24.5667 12.2478 24.5664 12.2493 24.5664H32.4336C32.9305 24.5664 33.3674 24.2368 33.504 23.759L37.9571 8.17305C38.0531 7.83704 37.9858 7.4758 37.7756 7.1969C37.5651 6.918 37.2361 6.75391 36.8867 6.75391H9.67569L8.87987 3.17256C8.76651 2.66318 8.31482 2.30078 7.79297 2.30078H1.11328C0.498367 2.30078 0 2.79915 0 3.41406C0 4.02898 0.498367 4.52734 1.11328 4.52734H6.90002C7.04092 5.16197 10.7084 21.6658 10.9194 22.6153C9.73628 23.1296 8.90625 24.3092 8.90625 25.6797C8.90625 27.5212 10.4045 29.0195 12.2461 29.0195H32.4336C33.0485 29.0195 33.5469 28.5212 33.5469 27.9062C33.5469 27.2913 33.0485 26.793 32.4336 26.793H12.2461C11.6323 26.793 11.1328 26.2934 11.1328 25.6797C11.1328 25.0668 11.6306 24.5681 12.2432 24.5667ZM35.4108 8.98047L31.5937 22.3398H13.139L10.1703 8.98047H35.4108Z" fill="#1E1E1E"/>
					<path d="M11.1328 32.3594C11.1328 34.2009 12.631 35.6992 14.4726 35.6992C16.3141 35.6992 17.8124 34.2009 17.8124 32.3594C17.8124 30.5178 16.3141 29.0195 14.4726 29.0195C12.631 29.0195 11.1328 30.5178 11.1328 32.3594ZM14.4726 31.2461C15.0863 31.2461 15.5859 31.7456 15.5859 32.3594C15.5859 32.9731 15.0863 33.4727 14.4726 33.4727C13.8588 33.4727 13.3593 32.9731 13.3593 32.3594C13.3593 31.7456 13.8588 31.2461 14.4726 31.2461Z" fill="#1E1E1E"/>
					<path d="M26.8672 32.3594C26.8672 34.2009 28.3655 35.6992 30.2071 35.6992C32.0486 35.6992 33.5469 34.2009 33.5469 32.3594C33.5469 30.5178 32.0486 29.0195 30.2071 29.0195C28.3655 29.0195 26.8672 30.5178 26.8672 32.3594ZM30.2071 31.2461C30.8208 31.2461 31.3204 31.7456 31.3204 32.3594C31.3204 32.9731 30.8208 33.4727 30.2071 33.4727C29.5933 33.4727 29.0938 32.9731 29.0938 32.3594C29.0938 31.7456 29.5933 31.2461 30.2071 31.2461Z" fill="#1E1E1E"/>
				</svg>
				<span class="smallcartcounter">0</span>
			</div>
		</div>
	</header>
	<nav>
		<ul class="mainmenu">
			<li><a href="{{Lang::link('/products')}}">{{$catalogheadertext}}</a>
				<ul>
					@foreach($catsmenu as $cm)
						<li><a href="{{Lang::link('/products/'.$cm->slug)}}">{{$cm->title}}</a></li>
					@endforeach
				</ul>
			</li>
			@foreach($ml as $m)
				<li><a href="{{Lang::link('/'.$m[0])}}">{{$m[1]}}</a></li>
			@endforeach
		</ul>
	</nav>
@endif