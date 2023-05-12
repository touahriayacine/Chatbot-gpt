import React, { useState } from "react";
import default_avatar from "../assets/profiles/1.jpg";
import plusIcon from "../assets/icons/plus.png";
import Form from "./Form";

const create_contacts = (contacts) => {
  return (
    <ul>
      {contacts.map((contact) => {
        return (
          <li class="message">
            <div class="avatar">
              <img
                src={contact.avatar ? contact.avatar : default_avatar}
                alt=""
              />
              <div className="connected"></div>
            </div>
            <div className="name-lastMssg">
              <h4>{contact.name}</h4>
              <p>{contact.last_message}</p>
            </div>
            <div class="time">
              <h4>{contact.time}</h4>
            </div>
          </li>
        );
      })}
    </ul>
  );
};

function showForm() {
  // let container = this.parentElement;
  // console.log(container);
  // container.appendChild(Form);
}

function Contact() {
  const [contacts, create_contacts] = useState([
    {
      avatar: undefined,
      name: "Touahria Yacine",
      last_message: "How are you?",
      time: "09:00",
    },
  ]);
  return (
    <div id="contacts">
      <div id="add_user">
        <button onclick={showForm()}>
          <img src={plusIcon} alt="" />
        </button>
        {/* {create_contacts(contacts)} */}
      </div>
    </div>
  );
}

export default Contact;
