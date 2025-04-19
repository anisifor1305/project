import React from 'react';

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
    <form className="add-project-form" action="/newproject" method="post">
        <input type="hidden" name="_token" value={props.token} autocomplete="off"></input>
        <input type="text" name='code_name'placeholder="Кодовое имя проекта"/>
        <input type="text" name='lore'placeholder="Описание"/>
        <button type="submit">Добавить проект</button>
    </form>
</div>
    </>)
}