<div class="static-block twelve columns">
    <h3>Contact Us!</h3>
    <form method="post" action ="#">
        <fieldset>
            <ul>
                <li>
                    <label for="first-name">First Name
                        <input type="text" name="first-name" id="first-name" required="required" />
                    </label>
                </li>
                <li>
                    <label for="last-name">Last Name
                        <input type="text" name="last-name" id="last-name" required="required" />
                    </label>
                </li>
                <li>
                    <label for="alt-email">Email
                        <input type="email" name="alt-email" id="alt-email" />
                    </label>
                </li>
                <li>
                    <label for="subject">Subject
                        <input type="text" name="subject" id="subject" required="required" />
                    </label>
                </li>
            </ul>
        </fieldset>

        <fieldset>
            <ul>
                <li>
                    <label for="description">Description
                        <textarea name="description" id="description" maxlength="1000" cols="40" rows="10" columns="100" required="required" placeholder="Enter description..."></textarea>
                    </label>
                </li>
            </ul>
        </fieldset>

        <fieldset>
            <input type="submit" name="send" id="send" value="Send" />
        </fieldset>
    </form>
</div>