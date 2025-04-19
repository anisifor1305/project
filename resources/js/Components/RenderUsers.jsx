import { useDebugValue } from "react";

function RenderUsers(props) {
    const arr = [];
    for (let i = 0; i < props.users.length; i++) {
        const obj = {}
        obj.login=props.users[i].login
        obj.projects=props.projects[i].code_name
        arr.push(obj)
    }
    const listUsers = arr.map(user =>
    <li className="users-item">
            <p>*</p>
            <p>Username: {user.login}</p>
            <p>Проекты: {user.projects}</p>
        </li>
    );
    return <ul className="users-list">{listUsers}</ul>;
}

export default RenderUsers;