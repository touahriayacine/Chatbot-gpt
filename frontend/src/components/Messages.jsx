import React, { useState } from "react";
import default_avatar from "../assets/profiles/1.jpg";

const create_messages = (messages) => {
  return messages.map((message) => {
    if (message.from_me) {
      <li className="me">
        <div className="mssg-me">
          <p>
            {message.list.map((m) => {
              return (
                <div className="other-mssg">
                  <p>{m}</p>
                </div>
              );
            })}
          </p>
        </div>
      </li>;
    } else {
      return (
        <li className="other">
          <div className="other-avatar">
            <img src={message.profile ? message.profile : default_avatar} />
            <h5>{message.time}</h5>
          </div>
          <div className="list-messages">
            {message.list.map((m) => {
              return (
                <div className="other-mssg">
                  <p>{m}</p>
                </div>
              );
            })}
          </div>
        </li>
      );
    }
  });
};

function Messages() {
  const [messages, create_messages] = useState([]);
  return <ul>{/* {messages} */}</ul>;
}

export default Messages;
