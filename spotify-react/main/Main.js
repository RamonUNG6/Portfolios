import React from 'react';
import './Main.css';
import card1 from '../assets/playlist/1.jpeg';
import card2 from '../assets/playlist/2.png';
import card3 from '../assets/playlist/3.jpeg';
import card4 from '../assets/playlist/4.jpeg';
import card5 from '../assets/playlist/5.jpeg';
import card6 from '../assets/playlist/6.jpeg';
import card7 from '../assets/playlist/7.jpeg';
import card8 from '../assets/playlist/8.jpeg';
import card9 from '../assets/playlist/9.jpeg';
import card10 from '../assets/playlist/10.jpeg';
import card11 from '../assets/playlist/11.jpeg';
import card12 from '../assets/playlist/12.jpeg';
import card13 from '../assets/playlist/13.jpeg';
import card14 from '../assets/playlist/14.jpeg';
import card15 from '../assets/playlist/15.jpeg';

const Main = () => {
    return (
          <main>
    <div className="main-container">
      <div className="playlist-container">
        <div id="result-playlists">
          <div className="playlist"> 
            <h1 id="greeting">Boa Noite</h1>
            <h2 className="session">Navegar por todas as seções</h2>
          </div>

           
          <div className="offer__scroll-container">
            <div className="offer__list">
              <section className="offer__list-item">
                                <a href="" className="cards">
                  <div className="cards card1">
                    <img src={card1} alt="" />
                    <span>Boas festas</span>
                  </div>
                </a>

                                <a href="" className="cards">
                  <div className="cards card2">
                    <img src={card2} alt="" />
                    <span>Feitos para você</span>
                  </div>
                </a>

                                <a href="" className="cards">
                  <div className="cards card3">
                    <img src={card3} alt="" />
                    <span>Lançamentos</span>
                  </div>
                </a>

                                <a href="" className="cards">
                  <div className="cards card4">
                    <img src={card4} alt="" />
                    <span>Creators</span>
                  </div>
                </a>

                                <a href="" className="cards">
                  <div className="cards card5">
                    <img src={card5} alt="" />
                    <span>Para treinar</span>
                  </div>
                </a>

                                <a href="" className="cards">
                  <div className="cards card6">
                    <img src={card6} alt="" />
                    <span>Podcasts</span>
                  </div>
                </a>

                                <a href="" className="cards">
                  <div className="cards card7">
                    <img src={card7} alt="" />
                    <span>Sertanejo</span>
                  </div>
                </a>

                                <a href="" className="cards">
                  <div className="cards card8">
                    <img src={card8} alt="" />
                    <span>Samba e pagode</span>
                  </div>
                </a>

                                <a href="" className="cards">
                  <div className="cards card9">
                    <img src={card9} alt="" />
                    <span>Funk</span>
                  </div>
                </a>

                
                <a href="" className="cards">
                  <div className="cards card10">
                    <img src={card10} alt="" />
                    <span>MPB</span>
                  </div>
                </a>

                
                <a href="" className="cards">
                  <div className="cards card11">
                    <img src={card11} alt="" />
                    <span>Rock</span>
                  </div>
                </a>

                
                <a href="" className="cards">
                  <div className="cards card12">
                    <img src={card12} alt="" />
                    <span>Hip Hop</span>
                  </div>
                </a>

                
                <a href="" className="cards">
                  <div className="cards card13">
                    <img src={card13} alt="" />
                    <span>Indie</span>
                  </div>
                </a>

                
                <a href="" className="cards">
                  <div className="cards card14">
                    <img src={card14} alt="" />
                    <span>Relax</span>
                  </div>
                </a>

                
                <a href="" className="cards">
                  <div className="cards card15">
                    <img src={card15} alt="" />
                    <span>Música Latina</span>
                  </div>
                </a>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
    );
}
export default Main;