function RenderProjects(listobj) {
    const stri = Object.values(listobj)[0]
    const cutstr = stri.slice(1, stri.length-1  )
    const readystr = cutstr.replaceAll('"', '');
    const arr = readystr.split(',')
    
    const listProjects = arr.map(project =>
        <li className="project-item">
                Проект {project}
                <div>
                    <button>Отчитаться о выполнении</button>
                </div>
            </li>
        );
    return <ul className="project-list">{listProjects}</ul>;
    // return <p>{arr}</p>
}

export default RenderProjects;