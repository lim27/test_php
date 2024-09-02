<?php

class GetEmployees
{
    public function __construct($email, $first_name, $last_name, $avatar)
    {
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->avatar = $avatar;
    }

    public function getInfo()
    {
        echo '
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td style="width: 130px">
                        ' . ($this->avatar ? '<img src="' . $this->avatar . '" alt="' . $this->avatar . '" title="' . $this->avatar . '" style="float:left" />' : '') . '
                    </td>
                    <td>
                        <b>Имя:</b> ' . $this->first_name . '<br>
                        <b>Фамилия:</b> ' . $this->last_name . '<br>
                        <b>Email:</b> ' . $this->email . '<br>
                    </td>
                </tr>
            </tbody>
        </table>
    ';

    }
}