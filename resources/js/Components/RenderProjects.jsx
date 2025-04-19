function RenderProjects(props) {
    // const stri = Object.values(listobj)[0]
    // const cutstr = stri.slice(1, stri.length-1  )
    // const readystr = cutstr.replaceAll('"', '');
    // const arr = readystr.split(',')
    // const listProjects = arr.map(project =>
    //     <li className="project-item">
    //             Проект {project}
    //             <div>
    //                 <button>Отчитаться о выполнении</button>
    //             </div>
    //         </li>
    //     );
    // return <ul className="project-list">{listProjects}</ul>;
    // return <p>{arr}</p>
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
                <button action={`/report/${project.code_name}`}>Отчитаться о выполнении</button>
            </div>
        </li>
    );
    return <ul className="project-list">{listProjects}</ul>;
}

export default RenderProjects;