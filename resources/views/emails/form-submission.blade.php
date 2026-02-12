<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .email-wrapper {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .email-header {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            padding: 28px 30px;
            text-align: center;
        }

        .email-header h1 {
            color: #fff;
            margin: 0;
            font-size: 22px;
            letter-spacing: 0.5px;
        }

        .email-header p {
            color: #a0aec0;
            margin: 6px 0 0;
            font-size: 13px;
        }

        .email-body {
            padding: 30px;
        }

        .field-row {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #edf2f7;
        }

        .field-label {
            font-weight: 600;
            color: #4a5568;
            min-width: 180px;
            font-size: 14px;
        }

        .field-value {
            color: #2d3748;
            font-size: 14px;
        }

        .email-footer {
            background: #f7fafc;
            padding: 18px 30px;
            text-align: center;
            border-top: 1px solid #edf2f7;
        }

        .email-footer p {
            color: #a0aec0;
            font-size: 12px;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table td {
            padding: 10px 0;
            border-bottom: 1px solid #edf2f7;
            font-size: 14px;
            vertical-align: top;
        }

        table td:first-child {
            font-weight: 600;
            color: #4a5568;
            width: 180px;
        }

        table td:last-child {
            color: #2d3748;
        }
    </style>
</head>

<body>
    <div class="email-wrapper">
        <div class="email-header">
            <h1>New {{ $formType }} Submission</h1>
            <p>IIMM - Indian Institute of Materials Management</p>
        </div>
        <div class="email-body">
            <table>
                @foreach($formData as $label => $value)
                    @if($value)
                        <tr>
                            <td>{{ $label }}</td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
        <div class="email-footer">
            <p>This email was sent automatically from the IIMM website. Please do not reply.</p>
        </div>
    </div>
</body>

</html>