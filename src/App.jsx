import React from 'react'
import { BrowserRouter as Router } from 'react-router-dom'
import Navbar from './components/Navbar'
import Routes from './Routes/Routes'
import Footer from './components/Footer';
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap/dist/js/bootstrap.bundle"

const App = () => {
    return (
        <Router>
            <Navbar />
            <Routes />
            <Footer />
        </Router>
    )
}

export default App
