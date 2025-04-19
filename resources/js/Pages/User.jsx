import React from 'react';
import RenderProjects from '../Components/RenderProjects';

export default function user(props) {
    return (
        <>
        <h1>Ваши проекты:</h1>
        {/* <p>{props.code_names[0]}</p> */}
    <div className="container">
        <RenderProjects code_names={props.code_names} lores={props.lores}   />
    </div>
        </>
    )
}