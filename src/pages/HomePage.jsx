import React from "react";

const HomePage =()=> {
    return (
      <div>
        <nav className="navbar navbar-light bg-light static-top">
          <div className="container">
            <a className="navbar-brand" href="#!">
             CREANDO SONRISAS
            </a>
            {/* <a className="btn btn-primary" href="#signup">
              Siguiente
            </a> */}
          </div>
        </nav>
        {/* Masthead*/}
        <header className="masthead">
          <div className="container position-relative">
            <div className="row justify-content-center">
              <div className="col-xl-6">
                <div className="text-center text-white">
                  {/* Page heading*/}
                  <h1 className="mb-5">
                    Generate more leads with a professional landing page!
                  </h1>
                  <form
                    className="form-subscribe"
                    id="contactForm"
                    data-sb-form-api-token="API_TOKEN"
                  >
                    {/* Email address input*/}
                    <div className="row">
                      <div className="col">
                        {/* <input
                          className="form-control form-control-lg"
                          id="emailAddress"
                          type="email"
                          placeholder="Email Address"
                          data-sb-validations="required,email"
                        /> */}
                        <div
                          className="invalid-feedback text-white"
                          data-sb-feedback="emailAddress:required"
                        >
                          Email Address is required.
                        </div>
                        <div
                          className="invalid-feedback text-white"
                          data-sb-feedback="emailAddress:email"
                        >
                          Email Address Email is not valid.
                        </div>
                      </div>
                      <div className="col-auto">
                        {/* <button
                          className="btn btn-primary btn-lg disabled"
                          id="submitButton"
                          type="submit"
                        >
                          Submit
                        </button> */}
                      </div>
                    </div>
                    <div className="d-none" id="submitSuccessMessage">
                      <div className="text-center mb-3">
                        <div className="fw-bolder">
                          Form submission successful!
                        </div>
                        <p>To activate this form, sign up at</p>
                        <a
                          className="text-white"
                          href="https://startbootstrap.com/solution/contact-forms"
                        >
                          https://startbootstrap.com/solution/contact-forms
                        </a>
                      </div>
                    </div>
                    <div className="d-none" id="submitErrorMessage">
                      <div className="text-center text-danger mb-3">
                        Error sending message!
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </header>
        {/* Icons Grid*/}
        <section className="features-icons bg-light text-center">
          <div className="container">
            <div className="row">
              <div className="col-lg-4">
                <div className="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div className="features-icons-icon d-flex">
                    <i className="bi-window m-auto text-primary" />
                  </div>
                  <h3>¿Quienes somos?</h3>
                  <p className="lead mb-0">
                    Somos un equipo que ayudara al niño a lograr un desarrollo en su vocabulario, lectura y escritura de manera sencilla y didactica. 
                  </p>
                </div>
              </div>
              <div className="col-lg-4">
                <div className="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                  <div className="features-icons-icon d-flex">
                    <i className="bi-layers m-auto text-primary" />
                  </div>
                  <h3>¿En que nos destacamos?</h3>
                  <p className="lead mb-0">
                    Al ser un equipo implementamos distintas metodologias para el aprendisaje de los niños, al hacer estas implementaciones obtenemos un excelente resultado con la metodologia WISS. 
                  </p>
                </div>
              </div> 
              <div className="col-lg-4">
                <div className="features-icons-item mx-auto mb-0 mb-lg-3"> <div className="features-icons-icon d-flex">
                    <i className="bi-terminal m-auto text-primary" />
                  </div>
                  <h3>Nuestro objetivo</h3>
                  <p className="lead mb-0">
                    Nuestro objetivo es lograr el desarrollo intelectual del niño a base de juegos y de una educacion dirigida a ellos.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        {/* Image Showcases*/}
        <section className="showcase">
          <div className="container p-0">
            <div className="row g-0">
              {/* <div
                className="col-lg-6 order-lg-2 text-white showcase-img"
                style={{
                  backgroundImage: 'url("assets/img/bg-showcase-1.jpg")',
                }}
              /> */}
              <div className="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>¿Que es el sindrome de Down?</h2>
                <p className="lead mb-0">
                El síndrome de Down es una afección en la que la persona tiene un cromosoma extra. Los cromosomas son pequeños “paquetes” de genes en el organismo. Los bebés con síndrome de Down tienen una copia extra de uno de estos cromosomas: el cromosoma 21.
                </p>
              </div>
            </div>
            <div className="row g-0">
              {/* <div
                className="col-lg-6 text-white showcase-img"
                style={{
                  backgroundImage: 'url("assets/img/bg-showcase-2.jpg")',
                }}
              /> */}
              <div className="col-lg-6 my-auto showcase-text">
                <h2>Como enseñar a una persona con sisndrome de Down?</h2>
                <p className="lead mb-0">
                  Para enseñar a un niño con sisndrome de Down nos tenemos que basar en metpodologias visuales ya que para ellos es mas sencillo entender las cosas o los temas viendo y oyendo.
                </p>
              </div>
            </div>
            <div className="row g-0">
              {/* <div
                className="col-lg-6 order-lg-2 text-white showcase-img"
                style={{
                  backgroundImage: 'url("assets/img/bg-showcase-3.jpg")',
                }}
              /> */}
              <div className="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>¿Que se hara en este software?</h2>
                <p className="lead mb-0">
                  Aui encontraremos no solo una ayuda de aprendisaje para los niños Down si no tambien orientaciones para los padres de familia que son primerisos ya que se contara con los links referenciados a distintas especialidaes y expertos que podran responder cada una de las dudas que tienen.
                </p>
              </div>
            </div>
          </div>
        </section>
        {/* Testimonials*/}
        <section className="testimonials text-center bg-light">
          <div className="container">
            <h2 className="mb-5">Algunos expertos en el area</h2>
            <div className="row">
              <div className="col-lg-4">
                <div className="testimonial-item mx-auto mb-5 mb-lg-0">
                  {/* <img
                    className="img-fluid rounded-circle mb-3"
                    src="assets/img/testimonials-1.jpg"
                    alt="..."
                  /> */}
                  <h5>Margaret E.</h5>
                  <p className="font-weight-light mb-0">
                   Hola me llamo margaret, soy psicopedagoga si necesitas alguna orientacion 
                   para ayudar a tu niño no dudes en contactarme!
                   CEL-7777777
                  </p>
                </div>
              </div>
              <div className="col-lg-4">
                <div className="testimonial-item mx-auto mb-5 mb-lg-0">
                  {/* <img
                    className="img-fluid rounded-circle mb-3"
                    src="assets/img/testimonials-2.jpg"
                    alt="..."
                  /> */}
                  <h5>Fred S.</h5>
                  <p className="font-weight-light mb-0">
                  Hola me llamo Fred y son Fonodiologo si necesitas alguna orientacion para ayudar
                   a tu niño no dudes en contactarme!
                   CEL-9999999
                  </p>
                </div>
              </div>
              <div className="col-lg-4">
                <div className="testimonial-item mx-auto mb-5 mb-lg-0">
                  {/* <img
                    className="img-fluid rounded-circle mb-3"
                    src="assets/img/testimonials-3.jpg"
                    alt="..."
                  /> */}
                  <h5>Sarah W.</h5>
                  <p className="font-weight-light mb-0">
                  Hola me llamo Sarah soy psicologa si necesitas alguna orientacion para 
                  ti o lograr comprender alguna cosa ssobre el sindrome de Down no dudes en contactarme!
                   CEL-6666666
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        {/* Call to Action*/}
        <section className="call-to-action text-white text-center" id="signup">
          <div className="container position-relative">
            <div className="row justify-content-center">
              <div className="col-xl-6">
                <h2 className="mb-4">Ready to get started? Sign up now!</h2>
                <form
                  className="form-subscribe"
                  id="contactFormFooter"
                  data-sb-form-api-token="API_TOKEN"
                >
                  {/* Email address input*/}
                  <div className="row">
                    <div className="col">
                      <input
                        className="form-control form-control-lg"
                        id="emailAddressBelow"
                        type="email"
                        placeholder="Correo Electronico"
                        data-sb-validations="required,email"
                      />
                      <div
                        className="invalid-feedback text-white"
                        data-sb-feedback="emailAddressBelow:required"
                      >
                        Email Address is required.
                      </div>
                      <div
                        className="invalid-feedback text-white"
                        data-sb-feedback="emailAddressBelow:email"
                      >
                        Email Address Email is not valid.
                      </div>
                    </div>
                    <div className="col-auto">
                      <button
                        className="btn btn-primary btn-lg disabled"
                        id="submitButton"
                        type="submit"
                      >
                        Enviar
                      </button>
                    </div>
                  </div>
                  <div className="d-none" id="submitSuccessMessage">
                    <div className="text-center mb-3">
                      <div className="fw-bolder">
                        Form submission successful!
                      </div>
                      <p>To activate this form, sign up at</p>
                      <a
                        className="text-white"
                        href="https://startbootstrap.com/solution/contact-forms"
                      >
                        https://startbootstrap.com/solution/contact-forms
                      </a>
                    </div>
                  </div>
                  <div className="d-none" id="submitErrorMessage">
                    <div className="text-center text-danger mb-3">
                      Error sending message!
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    );
  }

export default HomePage;
