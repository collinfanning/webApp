import React, { useState } from "react";
import { getAllRequiredInputs, postData } from "../functions/functions";
const EmployeeLogin = (props) => {
  const [username, setUsername] = useState("");
  const [password, setPassword] = useState("");

  /**
   *
   * @param {Event} e
   */
  const submitForm = (e) => {
    e.preventDefault();
    const requiredInputs = getAllRequiredInputs(e);
    for (const input of requiredInputs) input.reportValidity();
    postData("../")
    console.dir(e.target.querySelectorAll("input"));
    //fetch()
  };
  return (
    <>
      <form onSubmit={(e) => submitForm(e)}>
        <div className="container">
          <label htmlFor="username">
            <b>Username</b>
          </label>
          <input
            type="text"
            placeholder="Enter Username"
            name="uname"
            value={username}
            onChange={(e) => setUsername(e.target.value)}
            required
          />
          <label htmlFor="psw">
            <b>Password</b>
          </label>
          <input
            type="password"
            placeholder="Enter Password"
            name="psw"
            required
            value={password}
            onChange={(e) => setPassword(e.target.value)}
          />
          <button type="submit">Login</button>
        </div>
      </form>
    </>
  );
};
export default EmployeeLogin;