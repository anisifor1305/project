import React from 'react';
import RenderProjects from '../Components/RenderProjects';
import RenderUsers from '../Components/RenderUsers';

// import Authenticated from '@/Layouts/Authenticated';

// import { Inertia } from "@inertiajs/inertia";


// import { Head, usePage, Link } from '@inertiajs/inertia-react';

// import Pagination from '@/Components/Pagination';
// import Layout from '@/layouts/authenticated';
  

export default function admin(props) {
    return (<>
    <h1>Управление проектами</h1>
    {/* <p>{props.token}</p> */}
<div className="container">
    <h4>Создать проект</h4>
    <form className="add-project-form" action="/newproject" method="post">
        <input type="hidden" name="_token" value={props.token} autocomplete="off"></input>
        <input type="text" name='code_name'placeholder="Кодовое имя проекта"/>
        <input type="text" name='lore'placeholder="Описание"/>
        <button type="submit">Создать</button>
    </form>
</div>
<div className="container2">
    <h4>Добавить пользователю проект</h4>
    <form className="add-project-form" action="/addproject" method="post">
        <input type="hidden" name="_token" value={props.token} autocomplete="off"></input>
        <input type="text" name='code_name'placeholder="Кодовое имя проекта"/>
        <input type="text" name='login' placeholder="login пользователя"/>
        <button type="submit">Добавить</button>
    </form>
    <div>    <h4>Пользователи и проекты, в которых они участвуют</h4>
    <RenderUsers users={props.users} projects={props.projects} />
    </div>
</div>
<div className="container2">
    <h4>Добавить пользователя</h4>
    <form className="add-project-form" action="/adduser" method="post">
        <input type="hidden" name="_token" value={props.token} autocomplete="off"></input>
        <input type="text" name='login'placeholder="login пользователя"/>
        <input type="text" name='password' placeholder="пароль пользователя"/>
        <button type="submit">Добавить</button>
    </form>
    <div>    <h4>Пользователи и проекты, в которых они участвуют</h4>
    <RenderUsers users={props.users} projects={props.projects} />
    </div>
    <div><a href="/logout"><h4>Выйти</h4></a></div>
</div>
    </>)
}