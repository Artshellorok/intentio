<h1>Че нужно сделать чтобы установить лару:</h1>
<p>1.Поставить пыху УСТАНАВЛИВАЕШЬ ИМЕННО 7.2 И ВЫШЕ: <a href='https://www.youtube.com/watch?v=GWwhLfTRAV8'>Тута видео</a></p>
<p>2.ПОСТАВИТЬ РАСШИРЕНИЯ</p>
<ul>
    <li>2.1 Переименовать файл php.ini-development в php.ini</li>
    <li>2.2 Открыть этот файл <em>ОТ ИМЕНИ АДМИНИСТРАТОРА</em> и отредактировать <em>ОТ ИМЕНИ АДМИНИСТРАТОРА</em> и найти строку ; extension_dir = "./" и убрать ; и в кавычках написать ext</li>
    <li>2.3 Добавить рядом с записями ; extension= эти записи 
        extension=php_curl.dll 
        extension=php_mbstring.dll 
        extension=php_openssl.dll 
        extension=php_pdo_mysql.dll 
        extension=php_pdo_sqlite.dll 
        extension=php_sockets.dll
        БЕЗ ;
    </li>
    <li>2.4 Проверить если работает, мои поздравления самое сложное закончилось</li>
</ul>
<p>3.Поставить композер: <a href='https://www.youtube.com/watch?v=usMGJEeTTZU'>Тута видео</a></p>
<p>4.Установить гит если уже установлен пишешь в консоль "git clone https://github.com/Artshellorok/Npk" и получаешь лару</p>
<p>5. Чтобы чекнуть че в прожекте открой папку с прожектом через консоль и в той же консоли напиши php artisan serve</p>