<html>
    <head>
        
    </head>
    <body>
        <div>
            Hi Admin,
        </div>
        <br/>
        <br/>
        There is an request from user to become a doctor. Please review the details below <br/>
        <table border="1">
            
            <tbody>
                <tr>
                    <th>Name:</th>
                    <td>{{$user->first_name . ' ' . $user->last_name}}</td>
                </tr>
                <tr>
                    <th>Email ID:</th>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <th>Is Surgeon? </th>
                    <td>{{$detail->surgeon ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <th>Degree </th>
                    <td>{{$detail->degree }}</td>
                </tr>
                <tr>
                    <th>Specialisation </th>
                    <td>{{$detail->specialisation }}</td>
                </tr>
            </tbody>
        </table>
        
        Please approve the doctor, if the requirements has been verified.
        <div style="text-align: center;">
            <a href="{{route('admin.auth.doctor.approved', $user->id)}}" style="display: inline-block;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                font-size: 1rem;
                line-height: 1.5;
                border-width: 1px;
                border-style: solid;
                border-image: initial;
                padding: 0.375rem 0.75rem;
                border-radius: 0.25rem;
                color: rgb(255, 255, 255);
                background-color: rgb(40, 167, 69);
                text-decoration: none;
                border-color: rgb(40, 167, 69);">Approve</a>
        </div>
    </body>
</html>