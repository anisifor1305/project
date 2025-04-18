export default function MainPage() {
    return (<>
    <h1>Управление проектами</h1>
<div className="container">
    <ul className="project-list">
        <li className="project-item">
            Проект №1
            <div>
                <button>Отчитаться о выполнении</button>
                <button>Изменить стадию</button>
            </div>
        </li>
        <li className="project-item">
            Проект №2
            <div>
                <button>Отчитаться о выполнении</button>
                <button>Изменить стадию</button>
            </div>
        </li>
        <li className="project-item">
            Проект №3
            <div>
                <button>Отчитаться о выполнении</button>
                <button>Изменить стадию</button>
            </div>
        </li>
    </ul>

    <form className="add-project-form">
        <input type="text" placeholder="Название проекта"/>
        <select>
            <option value="">Выберите стадию</option>
            <option value="Планирование">Планирование</option>
            <option value="Разработка">Разработка</option>
            <option value="Тестирование">Тестирование</option>
            <option value="Выполнено">Выполнено</option>
        </select>
        <button type="submit">Добавить проект</button>
    </form>
</div>
    </>)
}