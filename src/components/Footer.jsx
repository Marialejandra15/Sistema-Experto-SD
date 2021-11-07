import React from 'react'

const Footer = () => {
  return (
    <footer className="footer bg-light">
    <div className="container">
      <div className="row">
        <div className="col-lg-6 h-100 text-center text-lg-start my-auto">
          <ul className="list-inline mb-2">
            <li className="list-inline-item">
              <a href="#!">Acerca de</a>
            </li>
            <li className="list-inline-item">⋅</li>
            <li className="list-inline-item">
              <a href="#!">Contacto</a>
            </li>
            <li className="list-inline-item">⋅</li>
            <li className="list-inline-item">
              <a href="#!">Terminos de uso</a>
            </li>
            <li className="list-inline-item">⋅</li>
            <li className="list-inline-item">
              <a href="#!">Politicas de privasidad</a>
            </li>
          </ul>
          <p className="text-muted small mb-4 mb-lg-0">
            © Creando Sonrisas 2021. Todos los derechos reservados.
          </p>
        </div>
        <div className="col-lg-6 h-100 text-center text-lg-end my-auto">
          <ul className="list-inline mb-0">
            <li className="list-inline-item me-4">
              <a href="#!">
                <i className="bi-facebook fs-3" />
              </a>
            </li>
            <li className="list-inline-item me-4">
              <a href="#!">
                <i className="bi-twitter fs-3" />
              </a>
            </li>
            <li className="list-inline-item">
              <a href="#!">
                <i className="bi-instagram fs-3" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  )
}

export default Footer
