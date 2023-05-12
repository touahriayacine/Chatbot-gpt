import React, { useState } from "react";
import Form from "../components/Form";
import NavBar from "../components/NavBar";
import Contact from "../components/Contact";
import Messages from "../components/Messages";
import searchIcon from "../assets/icons/search-interface-symbol.png";
import smileIcon from "../assets/icons/smile.png";
import fileIcon from "../assets/icons/file.png";
import sendIcon from "../assets/icons/send.png";

function App() {
  const [formVisibility, setFormVisibility] = useState(false);

  const updateVisibility = () => {
    setFormVisibility(() => !formVisibility);
  };

  return (
    <div id="app-container">
      {formVisibility && <Form updateVisibility={updateVisibility}></Form>}
      <NavBar></NavBar>
      <div id="main">
        <div id="search-bar">
          <div id="search-img">
            <img src={searchIcon} alt="" />
          </div>
          <input type="text" placeholder="search" />
        </div>
        <Contact updateVisibility={updateVisibility}></Contact>
        <div id="chat-container">
          <div id="chats">
            <Messages></Messages>
          </div>
          <div id="tools">
            <div id="chat-bar">
              <img src={smileIcon} alt="" id="emoji" />
              <input type="text" placeholder="Type a message" />
              <img src={fileIcon} alt="" id="add-file" />
            </div>
            <div id="send-btn">
              <img src={sendIcon} alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;