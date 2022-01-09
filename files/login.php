<div class="x-cont-login">
    <div class="ui column grid">
        <div class="column">
            <form action="./files/validate.php" method="post">
                <div class="ui form">
                    <div class="field">
                        <label>Email</label>
                        <div class="ui left icon input">
                            <input type="text" name="email" placeholder="Insert your email" required>
                            <i class="user icon"></i>
                        </div>
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <div class="ui left icon input">
                            <input type="password" name="password" placeholder="Insert your Master Password" required>
                            <i class="lock icon"></i>
                        </div>
                    </div>

                    <div class="wrong-pass">
<!--                        <span> ERROR. PLEASE TRY AGAIN </span>-->
                        <span></span>
                    </div>

                    <div class="xd-df">
                        <button class="ui inverted primary submit button">
                            <p>LOGIN</p>
                        </button>
                    </div>
                    <br>
                    <div class="xd-ma">
                        <p>
                            <a href="./files/register.php">Register</a>
                        </p>
                        <p>
                            <a href="./files/recover.php">I forgot my password</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>