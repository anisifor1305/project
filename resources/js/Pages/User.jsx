import React from 'react';
import RenderProjects from '../Components/RenderProjects';

export default function user(props) {
    return (
        <>
        <h1>Управление проектами</h1>
    <div className="container">
        <RenderProjects list={props.projects}   />
    </div>
        </>
    )
}