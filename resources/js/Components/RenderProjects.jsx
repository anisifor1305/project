import { useDebugValue } from "react";
function RenderProjects(props) {
    const arr = [];
    for (let i = 0; i < props.code_names.length; i++) {
        const obj = {}
        obj.code_name=props.code_names[i]
        obj.lore=props.lores[i]
        arr.push(obj)
    }
    const listProjects = arr.map(project =>
    <li className="project-item">
            <p>Проект: {project.code_name}</p>
            <p>Описание: {project.lore}</p>
            
            <div>
                <button ><a href={`/report/${project.code_name}`}>Отчитаться о выполнении</a></button>
            </div>
        </li>
    );
    return <ul className="project-list">{listProjects}</ul>;
}

export default RenderProjects;