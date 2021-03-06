<?php $ss = new Single('Модальные окна', 10, 2); ?>

<div class="modal recall_modal">
    <div class="container-modal">
        <a href="/" class="close closemodal">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"/>
            </svg>
        </a>
        <span class="title">{{ $ss->field('Обратный звонок', 'Заголовок', 'text', true, 'Обратный звонок') }}</span>
        <form action="/" id="recall_modal">
            <input type="text" name="title" required placeholder="{{ $ss->field('Обратный звонок', 'Имя', 'text', true, 'Ваше имя') }}">
            <input type="text" name="tel" required placeholder="{{ $ss->field('Обратный звонок', 'Телефон', 'text', true, 'Ваш номер телефона') }}">
            <input type="hidden" name="link" value="<?=$_SERVER['REQUEST_URI']?>">
            <input type="submit" value="{{ $ss->field('Обратный звонок', 'Отправить', 'text', true, 'Отправить') }}">
        </form>
        <span class="successsend">Сообщение успешно доставлено!</span>
    </div>
</div>

<div class="modal modal_cart">
    <div class="container-modal">
        <span class="title">{{ $ss->field('Модальная коризна', 'Заголовок', 'text', true, 'Корзина') }}</span>
        <a href="/" class="close closemodal">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"/>
            </svg>
        </a>
        <div class="items">

        </div>
        <div class="buttons">
            <a class="btn-empty-second closemodal">{{ $ss->field('Модальная коризна', 'Продолжить покупки', 'text', true, 'Продолжить покупки') }}</a>
            <div class="totalprice"></div>
            <a href="{{Lang::link('/cart/order')}}" class="btn">{{ $ss->field('Модальная коризна', 'Оформить заказ', 'text', true, 'Оформить заказ') }}</a>
        </div>
    </div>
</div>


<div class="modal modal_auth">
    <div class="container-modal">
        <a href="/" class="close closemodal">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"/>
            </svg>
        </a>
        <span class="title">{{ $ss->field('Авторизация', 'Войти', 'text', true, 'Войти') }}</span>
        <form action="/" id="modal_auth">
            @csrf
            <input type="email" name="email" required placeholder="{{ $ss->field('Авторизация', 'E-mail', 'text', true, 'Email') }}">
            <input type="password" name="password" required placeholder="{{ $ss->field('Авторизация', 'Пароль', 'text', true, 'Пароль') }}">
            <input type="submit" value="{{ $ss->field('Авторизация', 'Авторизоватся', 'text', true, 'Войти') }}">
        </form>
        <span class="errorauth">{{ $ss->field('Авторизация', 'Ошибка', 'text', true, 'Логин или пароль не верны') }}</span>
        <div class="underlinks">
            <a href="/" class="losspass">{{ $ss->field('Авторизация', 'Забыли пароль', 'text', true, 'Забыли пароль?') }}</a>
            <a href="/" class="signup">{{ $ss->field('Авторизация', 'Регистрация', 'text', true, 'Регистрация') }}</a>
        </div>
    </div>
</div>


<div class="modal modal_signup">
    <div class="container-modal">
        <a href="/" class="close closemodal">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"/>
            </svg>
        </a>
        <span class="title">Зарегистрироваться</span>
        <form action="/" id="modal_signup">
            @csrf
            <input type="email" name="email" required placeholder="Email">
            <input type="text" name="name" required placeholder="Имя">
            <input type="password" name="password" required placeholder="Пароль">
            <label for="customcheck" class="customcheck">
                <input type="checkbox" name="condition" required id="customcheck">
                <span class="checkmark"></span>
                Я принимаю Условия использования и Политику конфиденциальности
            </label>
            <input type="submit" value="Зарегистрироваться">
        </form>
        <span class="errorauth">Ошибка регистрации</span>
        <div class="underlinks undersign">
            <span>Уже зарегистрированы?</span> <span class="auth">Войти</span>
        </div>
    </div>
</div>

<div class="modal modal_losspass">
    <div class="container-modal">
        <a href="/" class="close closemodal">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.88393 8.00077L15.8169 1.06771C16.061 0.823615 16.061 0.427865 15.8169 0.183803C15.5729 -0.0602598 15.1771 -0.060291 14.933 0.183803L7.99999 7.11686L1.06697 0.183803C0.822881 -0.060291 0.427132 -0.060291 0.18307 0.183803C-0.0609921 0.427896 -0.0610233 0.823646 0.18307 1.06771L7.11609 8.00074L0.18307 14.9338C-0.0610233 15.1779 -0.0610233 15.5736 0.18307 15.8177C0.305101 15.9397 0.465069 16.0007 0.625038 16.0007C0.785006 16.0007 0.944944 15.9397 1.06701 15.8177L7.99999 8.88467L14.933 15.8177C15.055 15.9397 15.215 16.0007 15.375 16.0007C15.5349 16.0007 15.6949 15.9397 15.8169 15.8177C16.061 15.5736 16.061 15.1779 15.8169 14.9338L8.88393 8.00077Z" fill="#A0A0A0"/>
            </svg>
        </a>
        <span class="title">{{ $ss->field('Восстановить пароль', 'Восстановить пароль', 'text', true, 'Восстановить пароль') }}</span>
        <form action="/" id="modal_losspass">
            @csrf
            <input type="email" name="email" required placeholder="{{ $ss->field('Восстановить пароль', 'E-mail', 'text', true, 'Email') }}">
            <input type="submit" value="{{ $ss->field('Восстановить пароль', 'Восстановить', 'text', true, 'Восстановить') }}">
        </form>
        <span class="messagepass"></span>
        <div class="underlinks">
            <a href="/" class="auth">{{ $ss->field('Авторизация', 'Войти', 'text', true, 'Войти') }}</a>
            <a href="/" class="signup">{{ $ss->field('Авторизация', 'Регистрация', 'text', true, 'Регистрация') }}</a>
        </div>
    </div>
</div>
<?php $footer = new Single('Футер', 10, 2); ?>

<div class="chatbtns" id="chatbtns">
    <div class="mainbtn">
        <svg class="open" width="34" height="30" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.7984 0.740967H3.29032C1.47605 0.740967 0 2.21702 0 4.03129V14.5877C0 16.402 1.47605 17.8781 3.29032 17.8781H5.51081L5.01644 21.1412C4.91581 21.8056 5.43136 22.4023 6.10094 22.4023C6.48845 22.4023 5.90743 22.6503 14.8872 17.8781H21.7984C23.6127 17.8781 25.0887 16.402 25.0887 14.5877V4.03129C25.0887 2.21695 23.6127 0.740967 21.7984 0.740967ZM6.375 11.2289C5.31668 11.2289 4.45565 10.3678 4.45565 9.30951C4.45565 8.2512 5.31668 7.39016 6.375 7.39016C7.43332 7.39016 8.29436 8.2512 8.29436 9.30951C8.29436 10.3678 7.43332 11.2289 6.375 11.2289ZM12.5444 11.2289C11.486 11.2289 10.625 10.3678 10.625 9.30951C10.625 8.2512 11.486 7.39016 12.5444 7.39016C13.6027 7.39016 14.4637 8.2512 14.4637 9.30951C14.4637 10.3678 13.6027 11.2289 12.5444 11.2289ZM18.7137 11.2289C17.6554 11.2289 16.7944 10.3678 16.7944 9.30951C16.7944 8.2512 17.6554 7.39016 18.7137 7.39016C19.772 7.39016 20.6331 8.2512 20.6331 9.30951C20.6331 10.3678 19.772 11.2289 18.7137 11.2289ZM34 10.8861V21.4426C34 23.2598 32.5269 24.7329 30.7097 24.7329H28.4894L28.9836 27.9958C29.0842 28.6566 28.5725 29.2571 27.8992 29.2571C27.5091 29.2571 28.0748 29.4959 19.1127 24.7329H12.2016C11.379 24.7329 10.6258 24.4294 10.0482 23.9286C9.48113 23.4367 9.56367 22.5333 10.2108 22.1529C15.1748 19.2358 14.9098 19.3244 15.3215 19.3244H22.4578C24.593 19.3244 26.324 17.5935 26.324 15.4583V8.69258C26.324 8.08682 26.815 7.59581 27.4207 7.59581H30.7097C32.5269 7.59581 34 9.06891 34 10.8861Z" fill="white"/>
        </svg>
        <svg class="close" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.1044 10.0008L19.7707 1.33445C20.0758 1.02934 20.0758 0.534648 19.7707 0.22957C19.4656 -0.0755078 18.9709 -0.0755469 18.6658 0.22957L9.9995 8.8959L1.33323 0.22957C1.02811 -0.0755469 0.533427 -0.0755469 0.228349 0.22957C-0.0767284 0.534687 -0.0767674 1.02937 0.228349 1.33445L8.89462 10.0007L0.228349 18.6671C-0.0767674 18.9722 -0.0767674 19.4669 0.228349 19.7719C0.380888 19.9245 0.580848 20.0007 0.780809 20.0007C0.98077 20.0007 1.18069 19.9245 1.33327 19.7719L9.9995 11.1057L18.6658 19.7719C18.8183 19.9245 19.0183 20.0007 19.2182 20.0007C19.4182 20.0007 19.6181 19.9245 19.7707 19.7719C20.0758 19.4668 20.0758 18.9721 19.7707 18.6671L11.1044 10.0008Z" fill="white"/>
        </svg>
    </div>
    <div class="alllinks">
        <?php $els = $footer->field('Футер', 'Обратный звонок', 'repeat', true) ?>
        @foreach ($els as $elm)
            <a href="{{$elm->field('Ссылка', 'text', '')}}"><img src="{{$elm->field('Изображение', 'photo', '')}}" alt=""><span>{{$elm->field('Название', 'text', '')}}</span></a>
            <?php $elm->end(); ?>
        @endforeach
    </div>
</div>



<footer>
    <div class="container">
        <div class="collogo">
            <a class="logo" href="/"><img src="/images/logo.svg" alt=""></a>
            <span class="rightsave">© <?=date('Y');?> </br>
                All Rights Reserved.</span>
            <div class="social">
                <a href="/">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5278 0.307617H4.47215C2.17582 0.307617 0.307678 2.17576 0.307678 4.47208V11.5279C0.307678 13.8241 2.17582 15.6922 4.47215 15.6922H11.5279C13.8241 15.6922 15.6923 13.8241 15.6923 11.5279V4.47208C15.6923 2.17576 13.8241 0.307617 11.5278 0.307617V0.307617ZM7.99997 12.2065C5.6804 12.2065 3.79337 10.3195 3.79337 7.99991C3.79337 5.68034 5.6804 3.7933 7.99997 3.7933C10.3195 3.7933 12.2066 5.68034 12.2066 7.99991C12.2066 10.3195 10.3195 12.2065 7.99997 12.2065ZM12.3072 4.78536C11.6217 4.78536 11.0642 4.22783 11.0642 3.54236C11.0642 2.85689 11.6217 2.29924 12.3072 2.29924C12.9926 2.29924 13.5503 2.85689 13.5503 3.54236C13.5503 4.22783 12.9926 4.78536 12.3072 4.78536Z" fill="#97A38A"/>
                        <path d="M7.99999 4.69531C6.17786 4.69531 4.6953 6.17776 4.6953 8.00001C4.6953 9.82214 6.17786 11.3047 7.99999 11.3047C9.82224 11.3047 11.3047 9.82214 11.3047 8.00001C11.3047 6.17776 9.82224 4.69531 7.99999 4.69531Z" fill="#97A38A"/>
                        <path d="M12.3071 3.20117C12.1191 3.20117 11.966 3.35423 11.966 3.54226C11.966 3.7303 12.1191 3.88336 12.3071 3.88336C12.4953 3.88336 12.6483 3.73042 12.6483 3.54226C12.6483 3.35411 12.4953 3.20117 12.3071 3.20117Z" fill="#97A38A"/>
                        <clipPath id="clip0">
                            <rect width="15.3846" height="15.3846" fill="white" transform="translate(0.307678 0.307617)"/>
                        </clipPath>
                    </svg>
                </a>
                <a href="">
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.7289 3.51585C15.1736 2.85571 14.1483 2.58643 12.1902 2.58643H5.08223C3.0793 2.58643 2.03662 2.87308 1.48337 3.5759C0.94397 4.26117 0.94397 5.27084 0.94397 6.66826V9.33174C0.94397 12.039 1.58397 13.4135 5.08223 13.4135H12.1902C13.8883 13.4135 14.8292 13.1759 15.438 12.5933C16.0622 11.9959 16.3286 11.0205 16.3286 9.33174V6.66826C16.3286 5.19456 16.2868 4.17893 15.7289 3.51585ZM10.8209 8.36772L7.59325 10.0546C7.52109 10.0923 7.44218 10.111 7.36337 10.111C7.27414 10.111 7.18511 10.087 7.10625 10.0393C6.95777 9.9493 6.8671 9.78836 6.8671 9.61476V6.25179C6.8671 6.07849 6.95752 5.91769 7.10571 5.82767C7.25394 5.73764 7.43831 5.73149 7.59211 5.81139L10.8198 7.48742C10.984 7.57268 11.0871 7.74221 11.0874 7.92717C11.0876 8.11228 10.9849 8.28206 10.8209 8.36772Z" fill="#97A38A"/>
                    </svg>
                </a>
                <a href="">
                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.2984 4.08548C10.3194 4.06177 10.4177 3.9843 10.8035 3.9843L12.0684 3.98383C12.4799 3.98383 12.8146 3.64907 12.8146 3.23755V1.02667C12.8146 0.615855 12.4804 0.2811 12.0696 0.280395L10.1907 0.277344C9.03098 0.277344 8.04515 0.659871 7.33972 1.38373C6.63746 2.10429 6.2662 3.1102 6.2662 4.29253V5.48494H4.82882C4.41731 5.48494 4.08255 5.8197 4.08255 6.23122V8.6123C4.08255 9.02382 4.41731 9.35857 4.82882 9.35857H6.2662V14.9157C6.2662 15.3272 6.60096 15.662 7.01248 15.662H9.47619C9.88771 15.662 10.2225 15.3272 10.2225 14.9157V9.35869H11.9795C12.391 9.35869 12.7256 9.02382 12.7256 8.61253L12.7266 6.23134C12.7266 5.96102 12.5795 5.71089 12.3426 5.57861C12.2329 5.51734 12.1052 5.48494 11.9735 5.48494H10.2225V4.54289C10.2225 4.23583 10.2638 4.12468 10.2984 4.08548Z" fill="#97A38A"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="col">
            <span>{{ $footer->field('Футер меню 1', 'Заголовок', 'text', true, 'О нас') }}</span>
            <?php $els = $footer->field('Футер', 'Меню 1', 'repeat', true) ?>
            @foreach ($els as $elm)
                <a href="{{$elm->field('Ссылка', 'text', '')}}">{{$elm->field('Название', 'text', '')}}</a>
                <?php $elm->end(); ?>
            @endforeach
        </div>

        <div class="col">
            <span>{{ $footer->field('Футер меню 2', 'Заголовок', 'text', true, 'О нас') }}</span>
            <?php $els = $footer->field('Футер', 'Меню 2', 'repeat', true) ?>
            @foreach ($els as $elm)
                <a href="{{$elm->field('Ссылка', 'text', '')}}">{{$elm->field('Название', 'text', '')}}</a>
                <?php $elm->end(); ?>
            @endforeach
        </div>

        <div class="col">
            <span>{{ $footer->field('Футер меню 3', 'Заголовок', 'text', true, 'О нас') }}</span>
            <?php $els = $footer->field('Футер', 'Меню 3', 'repeat', true) ?>
            @foreach ($els as $elm)
                <a href="{{$elm->field('Ссылка', 'text', '')}}">{{$elm->field('Название', 'text', '')}}</a>
                <?php $elm->end(); ?>
            @endforeach
        </div>

        <div class="col">
            <span>{{ $footer->field('Футер меню 4', 'Заголовок', 'text', true, 'О нас') }}</span>
            <?php $els = $footer->field('Футер', 'Меню 4', 'repeat', true) ?>
            @foreach ($els as $elm)
                <a href="{{$elm->field('Ссылка', 'text', '')}}">{{$elm->field('Название', 'text', '')}}</a>
                <?php $elm->end(); ?>
            @endforeach
        </div>

    </div>
</footer>

<script src="/script.js?v=2"></script>
