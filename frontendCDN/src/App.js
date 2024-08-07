import {BrowserRouter as Router, Routes, Route,Link } from 'react-router-dom';
import './index.css'
import Login from './pages/Login';
import Register from './pages/Register';
import Search from './pages/Search';
import SearchList from './pages/SearchList';
import Home from './pages/Home';
import Articles from './pages/Articles';
import List from './pages/List';
import AddArticle from './pages/AddArticle';
import Article from './pages/Article';
import Quiz from './pages/Quiz';
import About from './pages/About';
import Profil from './pages/Profil';
import PageNotFound from './pages/PageNotFound';
import VerifyEmail from './pages/VerifyEmail';
import Experts from './pages/Experts';
import AddQuiz from './pages/AddQuiz';
import SuccessPage from './pages/SuccessPage';
import ConfirmEmail from './pages/ConfirmEmail';
import ChangePassword from './pages/ChangePassword';
import Tutoriels from './pages/Tutoriels';
import AddTutoriel from './pages/AddTutoriel';


function App() {
  return (
    <Router>
      <Routes>
        <Route exact path='/login' element={<Login/>} />
        <Route exact path='/mailVerify' element={<ConfirmEmail/>} />
        <Route exact path='/changePassword' element={<ChangePassword/>} />
        <Route exact path='/register' element={<Register/>} />
        <Route exact path='/emailVerify/:id' element={<VerifyEmail/>} />
        <Route exact path='/' element={<Home/>} />
        <Route exact path='/about' element={<About/>} />
        <Route exact path='/profil' element={<Profil/>} />
        <Route exact path='/quiz' element={<Quiz/>} />
        <Route exact path='/tutoriel' element={<Tutoriels/>} />
        <Route exact path='/addTutoriel' element={<AddTutoriel/>} />
        <Route exact path='/expert' element={<Experts/>} />
        <Route exact path='/add' element={<AddArticle/>} />
        <Route exact path='/addQuiz' element={<AddQuiz/>} />
        <Route exact path='/articles' element={<Articles/>} />
        <Route exact path='/articles/:type/:id' element={<List/>} />
        <Route exact path='/search/:word' element={<SearchList/>} />
        <Route exact path='/articles/show/:id' element={<Article/>} />
        <Route exact path='/search' element={<Search/>} />
        <Route exact path='/sucess' element={<SuccessPage/>} />
        <Route exact path='/notFound' element={<PageNotFound/>} />
      </Routes>
    </Router>
  );
}

export default App;
