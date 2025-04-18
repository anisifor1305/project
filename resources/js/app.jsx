import { StrictMode } from 'react';
import { createRoot } from 'react-dom/client';
import Welcome from './Components/MainPage';

const rootElement = document.getElementById('app');
const root = createRoot(rootElement);

root.render(
    <StrictMode>
        <Welcome />
    </StrictMode>
);