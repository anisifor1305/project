import { useDebugValue } from "react";

function RenderUsersAndProjects(props) {
    const arr = [];
    for (let i = 0; i < props.users.length; i++) {
        const obj = {}
        const arrWithProjects = [];
        for (let j = 0; j < props.users[i].projects.length; j++){
            arrWithProjects.push(props.users[i].projects[j])
        }
        obj.login=props.users[i].login
        obj.projects=arrWithProjects;
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
    // return <p>{props.users[1].projects}</p>
}

export default RenderUsersAndProjects;