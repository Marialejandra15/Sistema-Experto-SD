import { initializeApp } from "firebase/app";
import { getAuth } from "firebase/auth";

const firebaseConfig = {
  apiKey: "AIzaSyAyxj4M5DyNEiqhiNgew39_O_bAreB5DEI",
  authDomain: "carpinchoinc.firebaseapp.com",
  projectId: "carpinchoinc",
  storageBucket: "carpinchoinc.appspot.com",
  messagingSenderId: "228238820354",
  appId: "1:228238820354:web:134e07282a05e1fc81131b",
  measurementId: "G-SYEL0HNR5Q"
};

const app = initializeApp(firebaseConfig);

export const auth = getAuth(app);