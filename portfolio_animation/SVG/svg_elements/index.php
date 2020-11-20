<html>
    <head>
        <title> SVG Elements </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
        <body>
            <div id="container">
                        <div class="title">
                            <h1> SVG Elements</h1>
                        </div>
                <div id="wrap">
                    <svg viewBox="0 0 200 300" style="border: black solid;"> 
                        <path stroke="white" stroke-width="3" d="M40 70 V230"/>
                        <path stroke="white" stroke-width="3" d="M80 70 V230"/>
                        <path stroke="white" stroke-width="3" d="M120 70 V230"/>
                        <path stroke="white" stroke-width="3" d="M160 70 V230"/>
                        <circle cx="40" cy="40" r="30" fill="rgb(255, 99, 71)"/>
                        <circle cx="80" cy="40" r="30" fill="rgb(148, 0, 211)"/>
                        <circle cx="120" cy="40" r="30" fill="rgba(0, 255, 0, 0.5)"/>
                        <circle cx="160" cy="40" r="30" fill="rgba(255, 255, 0, 0.25)"/>

                        <circle cx="40" cy="260" r="30" fill="rgb(255, 99, 71)"/>
                        <circle cx="80" cy="260" r="30" fill="rgb(148, 0, 211)"/>
                        <circle cx="120" cy="260" r="30" fill="rgba(0, 255, 0, 0.5)"/>
                        <circle cx="160" cy="260" r="30" fill="rgba(255, 255, 0, 0.25)"/>
                    </svg>
                        <div class="num">
                            <h1>1. Circles and Lines</h1>
                        </div>
                </div>

                <div id="wrap2">
                    <svg viewBox="0 0 200 300" style="border: black solid;">
                        <rect width="110" height="10" x="30" y="100" fill="rgb(0,128,0)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <rect width="70" height="15" x="30" y="110" fill="rgb(34,139,34)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <rect width="160" height="30" x="20" y="120" fill="rgb(0,100,0)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="40" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="80" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="120" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="160" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <rect width="200" height="130"  y="175" fill="rgb(34,139,34)" stroke-width="1" stroke="rgb(0,0,0)"/>
                    </svg>
                    <div class="num">
                            <h1>2. Rectangle and Circle</h1>
                    </div>
                </div>

                <div id="wrap3">
                    <svg viewBox="0 0 200 300" style="border: black solid;">
                        <polyline points="0,150 40,150 40,180 70,180 70,210 100,210 100,240 130,240 130,270 160,270 160,300 0,300 0,150" fill="rgb(255, 99, 71)" stroke-width="2" stroke="rgb(255, 99, 71)"/>
                        <circle cx="20" cy="130" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="60" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="90" cy="190" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="120" cy="220" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="150" cy="250" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                    </svg>
                    <div class="num">
                            <h1>3. Polyline and Circle</h1>
                    </div>
                </div>

                <div id="wrap4">
                    <svg viewBox="0 0 200 300" style="border: black solid;">
                        <polyline points="0,150 40,150 40,180 70,180 70,210 100,210 100,240 130,240 130,270 160,270 160,300 0,300 0,150" fill="rgb(255, 99, 71)" stroke-width="2" stroke="rgb(255, 99, 71)"/>
                        <ellipse cx="20" cy="130" rx="10" ry="20" fill="rgb(148, 0, 211)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <ellipse cx="60" cy="160" rx="10" ry="20" fill="rgb(148, 0, 211)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <ellipse cx="90" cy="190" rx="10" ry="20" fill="rgb(148, 0, 211)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <ellipse cx="120" cy="220" rx="10" ry="20" fill="rgb(148, 0, 211)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <ellipse cx="150" cy="250" rx="10" ry="20" fill="rgb(148, 0, 211)" stroke-width="1" stroke="rgb(0,0,0)"/>
                    </svg>
                    <div class="num">
                            <h1>4. Polyline and Ellipse</h1>
                    </div>
                </div>

                <div id="wrap5">
                    <svg viewBox="0 0 200 300" style="border: black solid;">
                        <path stroke="white" stroke-width="3" d="M30 160 H170"/>
                        <rect width="110" height="10" x="30" y="100" fill="rgb(0,128,0)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <rect width="70" height="15" x="30" y="110" fill="rgb(34,139,34)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <rect width="160" height="30" x="20" y="120" fill="rgb(0,100,0)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="40" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="80" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="120" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="160" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <rect width="200" height="130"  y="175" fill="rgb(34,139,34)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <path stroke="white" stroke-width="3" d="M40 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M60 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M80 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M100 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M120 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M140 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M160 280 V300"/>
                        <circle cx="40" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="60" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="80" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="100" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="120" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="140" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="160" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                    </svg>
                    <div class="num">
                            <h1>5. Line, Rectangle and Circle</h1>
                    </div>
                </div>

                <div id="wrap6">
                    <svg viewBox="0 0 200 300" style="border: black solid;">
                        <polyline points="0,150 40,150 40,180 70,180 70,210 100,210 100,240 130,240 130,270 160,270 160,300 0,300 0,150" fill="rgb(255, 99, 71)" stroke-width="2" stroke="rgb(255, 99, 71)"/>
                        <polygon points="60,20 100,40 100,80 60,100 20,80 20,40" fill="yellow" stroke-width="1" stroke="rgb(0,0,0)"/>
                    </svg>
                    <div class="num">
                            <h1>6. Polyline and Polygon</h1>
                    </div>
                </div>

                <div id="wrap7">
                    <svg viewBox="0 0 200 300" style="border: black solid;">
                        <polyline points="0,150 40,150 40,180 70,180 70,210 100,210 100,240 130,240 130,270 160,270 160,300 0,300 0,150" fill="rgb(255, 99, 71)" stroke-width="2" stroke="rgb(255, 99, 71)"/>
                        <polygon points="60,20 100,40 100,80 60,100 20,80 20,40" fill="yellow" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <rect width="110" height="10" x="30" y="100" fill="rgb(0,128,0)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <rect width="70" height="15" x="30" y="110" fill="rgb(34,139,34)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <rect width="160" height="30" x="20" y="120" fill="rgb(0,100,0)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="40" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="80" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="120" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="160" cy="160" r="15" fill="rgb(107,142,35)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <ellipse cx="90" cy="190" rx="10" ry="20" fill="rgb(148, 0, 211)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <ellipse cx="120" cy="220" rx="10" ry="20" fill="rgb(148, 0, 211)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <ellipse cx="150" cy="250" rx="10" ry="20" fill="rgb(148, 0, 211)" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="40" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="60" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="80" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="100" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="120" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="140" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <circle cx="160" cy="270" r="10" fill="white" stroke-width="1" stroke="rgb(0,0,0)"/>
                        <path stroke="white" stroke-width="3" d="M40 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M60 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M80 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M100 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M120 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M140 280 V300"/>
                        <path stroke="white" stroke-width="3" d="M160 280 V300"/>
                    </svg>
                    <div class="num">
                            <h1>7. Line, Rectangle, Circle, Polyline, Ellipse and Polygon</h1>
                    </div>
                </div>
            </div>
        </body>
</html>