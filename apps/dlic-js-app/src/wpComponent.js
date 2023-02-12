import React from 'react';
import ReactDOM from 'react-dom';
import App from './App';


window.React = React;
window.ReactDOM = ReactDOM;

export class AppInstall extends React.Component {
    render() {
        return (
            <App />
        )
    }
};

window.renderApp = (root) => {
    if (root) {
        console.log('React App with element', root);
        ReactDOM.render(React.createElement(AppInstall), root);
    } else {
        console.log('React App with element root id');
        ReactDOM.render(React.createElement(AppInstall), document.getElementById("root"));
    }    
};
