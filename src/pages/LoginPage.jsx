import React, { useState } from "react";
import { auth } from "../firebase";
import { signInWithEmailAndPassword as signIn } from "firebase/auth";

import Alert from "@mui/material/Alert"
import Avatar from "@mui/material/Avatar";
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
import { useHistory } from "react-router-dom";

const theme = createTheme();

export default function LoguinPage() {

  const history = useHistory();

  const [field, setField] = useState({
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

    if(!field.email.trim() || !field.password.trim()){
      setField({
        ...field,
        error: "No Puede dejar espacios en blanco"
      });
    }else{
      signIn(auth, field.email, field.password)
        .then(()=>{
          setField({
            ...field,
            error: "",
            success: "Ingreso exito",
          });
          setTimeout(() => {
            history.push("/home");
          }, 3000);
        })
        .catch(() => {
          setField({
            ...field,
            error: "Email o contraseña incorrectos",
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
            Login
          </Typography>
          <Box
            component="form"
            noValidate
            onSubmit={(e) => handleOnSubmit(e)}
            sx={{ mt: 3 }}
          >
            <Grid container spacing={2}>
              <Grid item xs={12}>
                <TextField
                  required
                  fullWidth
                  id="email"
                  label="Correo Electrónico"
                  name="email"
                  autoComplete="email"
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
                  autoComplete="new-password"
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
              Ingresar
            </Button>
            <Grid container justifyContent="flex-end">
              <Grid item>
                <Link href="#" variant="body2">
                  No tiene una cuenta? Registrarse
                </Link>
              </Grid>
            </Grid>
          </Box>
        </Box>
      </Container>
    </ThemeProvider>
  );
}
