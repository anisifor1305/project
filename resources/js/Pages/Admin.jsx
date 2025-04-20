import React from 'react';
import RenderProjects from '../Components/RenderProjects';
import RenderUsersAndProjects from '../Components/RenderUsersAndProjects';
  

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
    <RenderUsersAndProjects users={props.users} projects={props.projects} />
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
    <div>    <h4>Список всех проектов</h4>
    <RenderProjects code_names={props.code_names} lores={props.lores} forAdmin={true}/>
    </div>
    <div><a href="/logout"><h4>Выйти</h4></a></div>
</div>
    </>)
}