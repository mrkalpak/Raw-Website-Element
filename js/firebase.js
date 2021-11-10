import { initializeApp } from "https://www.gstatic.com/firebasejs/9.3.0/firebase-app.js";
import { getDatabase } from "https://www.gstatic.com/firebasejs/9.3.0/firebase-database.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyCEEV7BF25zLo3tpGCLfv3zsiB7C_bxD6s",
  authDomain: "raw-website-material-acc6d.firebaseapp.com",
  projectId: "raw-website-material-acc6d",
  storageBucket: "raw-website-material-acc6d.appspot.com",
  messagingSenderId: "716912706783",
  appId: "1:716912706783:web:ff351d34f26727860a956a"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
// Get a reference to the database service
//   const db = getDatabase();
export const db=getDatabase(app);