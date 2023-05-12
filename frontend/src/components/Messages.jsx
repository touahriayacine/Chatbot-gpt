import React, { useState } from "react";
import default_avatar from "../assets/profiles/1.jpg";

const create_messages = (messages) => {
  return messages.map((message) => {
    if (message.from_me) {
      return (
        <li className="me" key={"me_" + message}>
          {message.list.map((m) => {
            return (
              <div className="mssg-me" key={"message_list_from_me" + m}>
                <div className="other-mssg" key={m + "_me"}>
                  <p>{m}</p>
                </div>
              </div>
            );
          })}
        </li>
      );
    } else {
      return (
        <li className="other" key={"other_" + message}>
          <div className="other-avatar">
            <img src={message.profile ? message.profile : default_avatar} />
            <h5>{message.time}</h5>
          </div>
          <div className="list-messages">
            {message.list.map((m) => {
              return (
                <div className="other-mssg" key={"other_" + m}>
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
  const [messages, setMessages] = useState([
    {
      from_me: false,
      profile: undefined,
      time: "09:00",
      list: [
        "Hey mate!",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ex mauris, efficitur id magna a, convallis tincidunt risus. Quisque sit amet efficitur eros. In placerat sit amet purus a lacinia.",
      ],
    },
    {
      from_me: true,
      list: ["hello", "How are you doing?"],
    },
  ]);
  return <ul>{create_messages(messages)}</ul>;
}

export default Messages;
