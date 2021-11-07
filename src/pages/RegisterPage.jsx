import React, { useState } from "react";
import { auth } from "../firebase";
import { createUserWithEmailAndPassword as createUser } from "firebase/auth";
import { useHistory } from "react-router-dom";

import Avatar from "@mui/material/Avatar";
import Alert from "@mui/material/Alert";
import Button from "@mui/material/Button";
import CssBaseline from "@mui/material/CssBaseline";
import TextField from "@mui/material/TextField";
import FormControlLabel from "@mui/material/FormControlLabel";
import Checkbox from "@mui/material/Checkbox";
import Link from "@mui/material/Link";
import Grid from "@mui/material/Grid";
import Box from "@mui/material/Box";
import Typography from "@mui/material/Typography";
import Container from "@mui/material/Container";
import { createTheme, ThemeProvider } from "@mui/material/styles";

const theme = createTheme();

export default function RegisterPage() {
  const history = useHistory();

  const [field, setField] = useState({
    name: "",
    lastName: "",
    email: "",
    password: "",
    error: "",
    success: "",
  });

  const handleOnChange = ({ target }) => {
    setField({
      ...field,
      [target.name]: target.value,
    });
  };

  const handleOnSubmit = (e) => {
    e.preventDefault();

    if (
      !field.name.trim() ||
      !field.lastName.trim() ||
      !field.email.trim() ||
      !field.password.trim()
    ) {
      setField({
        ...field,
        error: "No Puede dejar espacios en blanco",
      });
    } else {
      createUser(auth, field.email, field.password)
        .then(() => {
          setField({
            ...field,
            error: "",
            success: "Usuario creado con exito",
          });
          setTimeout(() => {
            history.push("/home");
          }, 3000);
        })
        .catch(() => {
          setField({
            ...field,
            error: "El correo no es valido o la contraseña es muy corta",
          });
        });
    }
  };

  return (
    <ThemeProvider theme={theme}>
      <Container component="main" maxWidth="xs">
        <CssBaseline />
        <Box
          sx={{
            marginTop: 8,
            display: "flex",
            flexDirection: "column",
            alignItems: "center",
          }}
        >
          <Avatar sx={{ m: 1, bgcolor: "secondary.main" }}></Avatar>
          <Typography component="h1" variant="h5">
            Registro de usuarios
          </Typography>
          <Box
            component="form"
            noValidate
            onSubmit={(e) => handleOnSubmit(e)}
            sx={{ mt: 3 }}
          >
            <Grid container spacing={2}>
              <Grid item xs={12} sm={6}>
                <TextField
                  name="name"
                  required
                  fullWidth
                  id="nombre"
                  label="Nombres"
                  autoFocus
                  value={field.name}
                  onChange={(e) => handleOnChange(e)}
                />
              </Grid>
              <Grid item xs={12} sm={6}>
                <TextField
                  required
                  fullWidth
                  id="lastName"
                  label="Apellidos"
                  name="lastName"
                  value={field.lastName}
                  onChange={(e) => handleOnChange(e)}
                />
              </Grid>
              <Grid item xs={12}>
                <TextField
                  required
                  fullWidth
                  id="email"
                  label="Correo Electronico"
                  name="email"
                  value={field.email}
                  onChange={(e) => handleOnChange(e)}
                />
              </Grid>
              <Grid item xs={12}>
                <TextField
                  required
                  fullWidth
                  name="password"
                  label="Password"
                  type="password"
                  id="password"
                  value={field.password}
                  onChange={(e) => handleOnChange(e)}
                />
              </Grid>
              <Grid item xs={12}>
                <FormControlLabel
                  control={
                    <Checkbox value="allowExtraEmails" color="primary" />
                  }
                  label="Estoy de acuerdo en recibir mas informacion."
                />
              </Grid>
            </Grid>
            {field.error.trim() && (
              <Alert severity="error">{field.error}</Alert>
            )}
            {field.success.trim() && (
              <Alert severity="success">{field.success}</Alert>
            )}
            <Button
              type="submit"
              fullWidth
              variant="contained"
              sx={{ mt: 3, mb: 2 }}
            >
              Registrarse
            </Button>
            <Grid container justifyContent="flex-end">
              <Grid item>
                <Link href="#" variant="body2">
                  Ya tiene una cuenta?
                </Link>
              </Grid>
            </Grid>
          </Box>
        </Box>
      </Container>
    </ThemeProvider>
  );
}
