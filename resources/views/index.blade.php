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

        header {
            background-color: #2F2F2F;
            #header-title {
                font-weight: bold;
                a {
                    text-decoration: none;
                    color: orange;
                }
            }
            height: calc(3 * 16px);
            padding: 0 64px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            nav {
                ul {
                    display: flex;
                    gap: 32px;
                }
                ul li {
                    list-style: none;
                }
                ul li a {
                    color: white;
                    text-decoration: none;
                    &:hover {
                        color: orange;
                        transition: color 250ms ease-in-out;
                    }
                }
            }
        }
    </style>
</head>
<body>
    <x-header />
</body>
</html>