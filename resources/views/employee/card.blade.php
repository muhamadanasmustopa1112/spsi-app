<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $employee->name }}</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at top, #1e40af, #020617);
            font-family: "Segoe UI", Arial, sans-serif;
            padding: 16px;
        }

        .card {
            width: 100%;
            max-width: 440px;
            background: #ffffff;
            border-radius: 20px;
            padding: 26px;
            position: relative;
            box-shadow: 0 25px 50px rgba(0,0,0,.35);
            overflow: hidden;
        }

        /* Accent header */
        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 120px;
            background: linear-gradient(135deg, #2563eb, #1e3a8a);
        }

        .content {
            position: relative;
            z-index: 1;
        }

        .header {
            display: flex;
            align-items: flex-end;
            gap: 18px;
            margin-bottom: 16px;
        }

        .avatar {
            width: 96px;
            height: 120px;
            border-radius: 10px;
            object-fit: cover;
            border: 3px solid #ffffff;
            background: #e5e7eb;
            box-shadow: 0 10px 20px rgba(0,0,0,.35);
        }

        .name {
            margin: 0;
            font-size: 22px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.2;
        }

        .position {
            display: inline-block;
            margin-top: 6px;
            padding: 4px 10px;
            font-size: 12px;
            font-weight: 600;
            color: #1e40af;
            background: #e0e7ff;
            border-radius: 999px;
        }

        .company {
            margin-top: 14px;
            font-size: 14px;
            font-weight: 600;
            color: #111827;
        }

        .divider {
            height: 1px;
            background: linear-gradient(to right, #2563eb, transparent);
            margin: 16px 0;
        }

        .info {
            font-size: 14px;
            color: #374151;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            gap: 12px;
        }

        .label {
            font-weight: 600;
            color: #1f2933;
            white-space: nowrap;
        }

        .value {
            color: #4b5563;
            text-align: right;
            max-width: 65%;
            word-break: break-word;
        }

        /* =========================
           MOBILE FIX (PENTING)
        ========================== */
        @media (max-width: 640px) {

            .card {
                padding: 20px;
            }

            .card::before {
                height: 80px;
            }

            .header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .avatar {
                width: 90px;
                height: 112px;
                margin-top: 14px;
            }

            .name {
                color: #111827;
                font-size: 20px;
                margin-top: 10px;
            }

            .position {
                margin-top: 6px;
            }

            .company {
                text-align: center;
                margin-top: 10px;
            }

            .info-row {
                flex-direction: column;
                align-items: flex-start;
            }

            .value {
                text-align: left;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="card">
    <div class="content">

        <div class="header">
            @if($employee->photo)
                <img src="{{ asset('storage/'.$employee->photo) }}" class="avatar">
            @endif

            <div>
                <h2 class="name">{{ $employee->name }}</h2>
                <div class="position">{{ $employee->position }}</div>
            </div>
        </div>

        <div class="company">{{ $employee->company ?? 'PT SARANA PRIMA SOLUSI INDONESIA' }}</div>

        <div class="divider"></div>

        <div class="info">
            <div class="info-row">
                <span class="label">Telepon</span>
                <span class="value">{{ $employee->phone }}</span>
            </div>
            <div class="info-row">
                <span class="label">Email</span>
                <span class="value">{{ $employee->email ?? '-' }}</span>
            </div>
            <div class="info-row">
                <span class="label">Alamat</span>
                <span class="value">{{ $employee->address ?? '-' }}</span>
            </div>
        </div>

    </div>
</div>

</body>
</html>
