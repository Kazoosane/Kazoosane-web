<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Kazoosane</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif
        }

        body {
            background-color: #1A1A2A;
            color: white;
        }

        header {
            background-color: #1A1A1A;
            #header-title {
                font-weight: bold;
                a {
                    text-decoration: none;
                    color: orange;
                }
            }
            height: calc(4 * 16px);
            padding: 0 64px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            nav {
                ul {
                    display: flex;
                    gap: 16px;
                }
                ul li {
                    list-style: none;
                    padding: 8px;
                    background-color: #3A2F2F;
                    border-radius: 8px;
                }
                ul li a {
                    color: white;
                    text-decoration: none;
                    &:hover {
                        color: orange;
                        transition: color 250ms ease-in;
                    }
                }
            }
        }

        main {
            margin: 16px 64px;
            h2 {
                color: orange;
            }
        }

        .h2 {
            color: orange;
            span {
                background-color: orange;
                padding: 4px;
                border-radius: 8px;
            }
        }

        @media screen and (max-width: 580px) {
            header {
                padding: 0 16px;
            }
        }
    </style>
</head>
<body>
    <x-header />
</body>
</html>