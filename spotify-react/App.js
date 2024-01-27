import './App.css';
import './Reset.css';
import './Vars.css';
import Header from './header/Header';
import Sidebar from './sidebar/Sidebar';
import Footer from './footer/Footer';
import Main from './main/Main';
import './media-query.css';

function App() {
  return (
    <>
    <Header/>,
    <Sidebar/>,
    <Footer/>,
    <Main/>
    </>
  );
}

export default App;