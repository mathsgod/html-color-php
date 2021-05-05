<?php

namespace HTML;

class Color
{
    const DATA = [
        "aliceblue" => [
            "name" => "AliceBlue",
            "hex" => "#F0F8FF"
        ],
        "antiquewhite" => [
            "name" => "AntiqueWhite",
            "hex" => "#FAEBD7"
        ],
        "aqua" => [
            "name" => "Aqua",
            "hex" => "#00FFFF"
        ],
        "aquamarine" => [
            "name" => "Aquamarine",
            "hex" => "#7FFFD4"
        ],
        "azure" => [
            "name" => "Azure",
            "hex" => "#F0FFFF"
        ],
        "beige" => [
            "name" => "Beige",
            "hex" => "#F5F5DC"
        ],
        "bisque" => [
            "name" => "Bisque",
            "hex" => "#FFE4C4"
        ],
        "black" => [
            "name" => "Black",
            "hex" => "#000000"
        ],
        "blanchedalmond" => [
            "name" => "BlanchedAlmond",
            "hex" => "#FFEBCD"
        ],
        "blue" => [
            "name" => "Blue",
            "hex" => "#0000FF"
        ],
        "blueviolet" => [
            "name" => "BlueViolet",
            "hex" => "#8A2BE2"
        ],
        "brown" => [
            "name" => "Brown",
            "hex" => "#A52A2A"
        ],
        "burlywood" => [
            "name" => "BurlyWood",
            "hex" => "#DEB887"
        ],
        "cadetblue" => [
            "name" => "CadetBlue",
            "hex" => "#5F9EA0"
        ],
        "chartreuse" => [
            "name" => "Chartreuse",
            "hex" => "#7FFF00"
        ],
        "chocolate" => [
            "name" => "Chocolate",
            "hex" => "#D2691E"
        ],
        "coral" => [
            "name" => "Coral",
            "hex" => "#FF7F50"
        ],
        "cornflowerblue" => [
            "name" => "CornflowerBlue",
            "hex" => "#6495ED"
        ],
        "cornsilk" => [
            "name" => "Cornsilk",
            "hex" => "#FFF8DC"
        ],
        "crimson" => [
            "name" => "Crimson",
            "hex" => "#DC143C"
        ],
        "cyan" => [
            "name" => "Cyan",
            "hex" => "#00FFFF"
        ],
        "darkblue" => [
            "name" => "DarkBlue",
            "hex" => "#00008B"
        ],
        "darkcyan" => [
            "name" => "DarkCyan",
            "hex" => "#008B8B"
        ],
        "darkgoldenrod" => [
            "name" => "DarkGoldenRod",
            "hex" => "#B8860B"
        ],
        "darkgray" => [
            "name" => "DarkGray",
            "hex" => "#A9A9A9"
        ],
        "darkgrey" => [
            "name" => "DarkGrey",
            "hex" => "#A9A9A9"
        ],
        "darkgreen" => [
            "name" => "DarkGreen",
            "hex" => "#006400"
        ],
        "darkkhaki" => [
            "name" => "DarkKhaki",
            "hex" => "#BDB76B"
        ],
        "darkmagenta" => [
            "name" => "DarkMagenta",
            "hex" => "#8B008B"
        ],
        "darkolivegreen" => [
            "name" => "DarkOliveGreen",
            "hex" => "#556B2F"
        ],
        "darkorange" => [
            "name" => "DarkOrange",
            "hex" => "#FF8C00"
        ],
        "darkorchid" => [
            "name" => "DarkOrchid",
            "hex" => "#9932CC"
        ],
        "darkred" => [
            "name" => "DarkRed",
            "hex" => "#8B0000"
        ],
        "darksalmon" => [
            "name" => "DarkSalmon",
            "hex" => "#E9967A"
        ],
        "darkseagreen" => [
            "name" => "DarkSeaGreen",
            "hex" => "#8FBC8F"
        ],
        "darkslateblue" => [
            "name" => "DarkSlateBlue",
            "hex" => "#483D8B"
        ],
        "darkslategray" => [
            "name" => "DarkSlateGray",
            "hex" => "#2F4F4F"
        ],
        "darkslategrey" => [
            "name" => "DarkSlateGrey",
            "hex" => "#2F4F4F"
        ],
        "darkturquoise" => [
            "name" => "DarkTurquoise",
            "hex" => "#00CED1"
        ],
        "darkviolet" => [
            "name" => "DarkViolet",
            "hex" => "#9400D3"
        ],
        "deeppink" => [
            "name" => "DeepPink",
            "hex" => "#FF1493"
        ],
        "deepskyblue" => [
            "name" => "DeepSkyBlue",
            "hex" => "#00BFFF"
        ],
        "dimgray" => [
            "name" => "DimGray",
            "hex" => "#696969"
        ],
        "dimgrey" => [
            "name" => "DimGrey",
            "hex" => "#696969"
        ],
        "dodgerblue" => [
            "name" => "DodgerBlue",
            "hex" => "#1E90FF"
        ],
        "firebrick" => [
            "name" => "FireBrick",
            "hex" => "#B22222"
        ],
        "floralwhite" => [
            "name" => "FloralWhite",
            "hex" => "#FFFAF0"
        ],
        "forestgreen" => [
            "name" => "ForestGreen",
            "hex" => "#228B22"
        ],
        "fuchsia" => [
            "name" => "Fuchsia",
            "hex" => "#FF00FF"
        ],
        "gainsboro" => [
            "name" => "Gainsboro",
            "hex" => "#DCDCDC"
        ],
        "ghostwhite" => [
            "name" => "GhostWhite",
            "hex" => "#F8F8FF"
        ],
        "gold" => [
            "name" => "Gold",
            "hex" => "#FFD700"
        ],
        "goldenrod" => [
            "name" => "GoldenRod",
            "hex" => "#DAA520"
        ],
        "gray" => [
            "name" => "Gray",
            "hex" => "#808080"
        ],
        "grey" => [
            "name" => "Grey",
            "hex" => "#808080"
        ],
        "green" => [
            "name" => "Green",
            "hex" => "#008000"
        ],
        "greenyellow" => [
            "name" => "GreenYellow",
            "hex" => "#ADFF2F"
        ],
        "honeydew" => [
            "name" => "HoneyDew",
            "hex" => "#F0FFF0"
        ],
        "hotpink" => [
            "name" => "HotPink",
            "hex" => "#FF69B4"
        ],
        "indianred" => [
            "name" => "IndianRed",
            "hex" => "#CD5C5C"
        ],
        "indigo" => [
            "name" => "Indigo",
            "hex" => "#4B0082"
        ],
        "ivory" => [
            "name" => "Ivory",
            "hex" => "#FFFFF0"
        ],
        "khaki" => [
            "name" => "Khaki",
            "hex" => "#F0E68C"
        ],
        "lavender" => [
            "name" => "Lavender",
            "hex" => "#E6E6FA"
        ],
        "lavenderblush" => [
            "name" => "LavenderBlush",
            "hex" => "#FFF0F5"
        ],
        "lawngreen" => [
            "name" => "LawnGreen",
            "hex" => "#7CFC00"
        ],
        "lemonchiffon" => [
            "name" => "LemonChiffon",
            "hex" => "#FFFACD"
        ],
        "lightblue" => [
            "name" => "LightBlue",
            "hex" => "#ADD8E6"
        ],
        "lightcoral" => [
            "name" => "LightCoral",
            "hex" => "#F08080"
        ],
        "lightcyan" => [
            "name" => "LightCyan",
            "hex" => "#E0FFFF"
        ],
        "lightgoldenrodyellow" => [
            "name" => "LightGoldenRodYellow",
            "hex" => "#FAFAD2"
        ],
        "lightgray" => [
            "name" => "LightGray",
            "hex" => "#D3D3D3"
        ],
        "lightgrey" => [
            "name" => "LightGrey",
            "hex" => "#D3D3D3"
        ],
        "lightgreen" => [
            "name" => "LightGreen",
            "hex" => "#90EE90"
        ],
        "lightpink" => [
            "name" => "LightPink",
            "hex" => "#FFB6C1"
        ],
        "lightsalmon" => [
            "name" => "LightSalmon",
            "hex" => "#FFA07A"
        ],
        "lightseagreen" => [
            "name" => "LightSeaGreen",
            "hex" => "#20B2AA"
        ],
        "lightskyblue" => [
            "name" => "LightSkyBlue",
            "hex" => "#87CEFA"
        ],
        "lightslategray" => [
            "name" => "LightSlateGray",
            "hex" => "#778899"
        ],
        "lightslategrey" => [
            "name" => "LightSlateGrey",
            "hex" => "#778899"
        ],
        "lightsteelblue" => [
            "name" => "LightSteelBlue",
            "hex" => "#B0C4DE"
        ],
        "lightyellow" => [
            "name" => "LightYellow",
            "hex" => "#FFFFE0"
        ],
        "lime" => [
            "name" => "Lime",
            "hex" => "#00FF00"
        ],
        "limegreen" => [
            "name" => "LimeGreen",
            "hex" => "#32CD32"
        ],
        "linen" => [
            "name" => "Linen",
            "hex" => "#FAF0E6"
        ],
        "magenta" => [
            "name" => "Magenta",
            "hex" => "#FF00FF"
        ],
        "maroon" => [
            "name" => "Maroon",
            "hex" => "#800000"
        ],
        "mediumaquamarine" => [
            "name" => "MediumAquaMarine",
            "hex" => "#66CDAA"
        ],
        "mediumblue" => [
            "name" => "MediumBlue",
            "hex" => "#0000CD"
        ],
        "mediumorchid" => [
            "name" => "MediumOrchid",
            "hex" => "#BA55D3"
        ],
        "mediumpurple" => [
            "name" => "MediumPurple",
            "hex" => "#9370DB"
        ],
        "mediumseagreen" => [
            "name" => "MediumSeaGreen",
            "hex" => "#3CB371"
        ],
        "mediumslateblue" => [
            "name" => "MediumSlateBlue",
            "hex" => "#7B68EE"
        ],
        "mediumspringgreen" => [
            "name" => "MediumSpringGreen",
            "hex" => "#00FA9A"
        ],
        "mediumturquoise" => [
            "name" => "MediumTurquoise",
            "hex" => "#48D1CC"
        ],
        "mediumvioletred" => [
            "name" => "MediumVioletRed",
            "hex" => "#C71585"
        ],
        "midnightblue" => [
            "name" => "MidnightBlue",
            "hex" => "#191970"
        ],
        "mintcream" => [
            "name" => "MintCream",
            "hex" => "#F5FFFA"
        ],
        "mistyrose" => [
            "name" => "MistyRose",
            "hex" => "#FFE4E1"
        ],
        "moccasin" => [
            "name" => "Moccasin",
            "hex" => "#FFE4B5"
        ],
        "navajowhite" => [
            "name" => "NavajoWhite",
            "hex" => "#FFDEAD"
        ],
        "navy" => [
            "name" => "Navy",
            "hex" => "#000080"
        ],
        "oldlace" => [
            "name" => "OldLace",
            "hex" => "#FDF5E6"
        ],
        "olive" => [
            "name" => "Olive",
            "hex" => "#808000"
        ],
        "olivedrab" => [
            "name" => "OliveDrab",
            "hex" => "#6B8E23"
        ],
        "orange" => [
            "name" => "Orange",
            "hex" => "#FFA500"
        ],
        "orangered" => [
            "name" => "OrangeRed",
            "hex" => "#FF4500"
        ],
        "orchid" => [
            "name" => "Orchid",
            "hex" => "#DA70D6"
        ],
        "palegoldenrod" => [
            "name" => "PaleGoldenRod",
            "hex" => "#EEE8AA"
        ],
        "palegreen" => [
            "name" => "PaleGreen",
            "hex" => "#98FB98"
        ],
        "paleturquoise" => [
            "name" => "PaleTurquoise",
            "hex" => "#AFEEEE"
        ],
        "palevioletred" => [
            "name" => "PaleVioletRed",
            "hex" => "#DB7093"
        ],
        "papayawhip" => [
            "name" => "PapayaWhip",
            "hex" => "#FFEFD5"
        ],
        "peachpuff" => [
            "name" => "PeachPuff",
            "hex" => "#FFDAB9"
        ],
        "peru" => [
            "name" => "Peru",
            "hex" => "#CD853F"
        ],
        "pink" => [
            "name" => "Pink",
            "hex" => "#FFC0CB"
        ],
        "plum" => [
            "name" => "Plum",
            "hex" => "#DDA0DD"
        ],
        "powderblue" => [
            "name" => "PowderBlue",
            "hex" => "#B0E0E6"
        ],
        "purple" => [
            "name" => "Purple",
            "hex" => "#800080"
        ],
        "rebeccapurple" => [
            "name" => "RebeccaPurple",
            "hex" => "#663399"
        ],
        "red" => [
            "name" => "Red",
            "hex" => "#FF0000"
        ],
        "rosybrown" => [
            "name" => "RosyBrown",
            "hex" => "#BC8F8F"
        ],
        "royalblue" => [
            "name" => "RoyalBlue",
            "hex" => "#4169E1"
        ],
        "saddlebrown" => [
            "name" => "SaddleBrown",
            "hex" => "#8B4513"
        ],
        "salmon" => [
            "name" => "Salmon",
            "hex" => "#FA8072"
        ],
        "sandybrown" => [
            "name" => "SandyBrown",
            "hex" => "#F4A460"
        ],
        "seagreen" => [
            "name" => "SeaGreen",
            "hex" => "#2E8B57"
        ],
        "seashell" => [
            "name" => "SeaShell",
            "hex" => "#FFF5EE"
        ],
        "sienna" => [
            "name" => "Sienna",
            "hex" => "#A0522D"
        ],
        "silver" => [
            "name" => "Silver",
            "hex" => "#C0C0C0"
        ],
        "skyblue" => [
            "name" => "SkyBlue",
            "hex" => "#87CEEB"
        ],
        "slateblue" => [
            "name" => "SlateBlue",
            "hex" => "#6A5ACD"
        ],
        "slategray" => [
            "name" => "SlateGray",
            "hex" => "#708090"
        ],
        "slategrey" => [
            "name" => "SlateGrey",
            "hex" => "#708090"
        ],
        "snow" => [
            "name" => "Snow",
            "hex" => "#FFFAFA"
        ],
        "springgreen" => [
            "name" => "SpringGreen",
            "hex" => "#00FF7F"
        ],
        "steelblue" => [
            "name" => "SteelBlue",
            "hex" => "#4682B4"
        ],
        "tan" => [
            "name" => "Tan",
            "hex" => "#D2B48C"
        ],
        "teal" => [
            "name" => "Teal",
            "hex" => "#008080"
        ],
        "thistle" => [
            "name" => "Thistle",
            "hex" => "#D8BFD8"
        ],
        "tomato" => [
            "name" => "Tomato",
            "hex" => "#FF6347"
        ],
        "turquoise" => [
            "name" => "Turquoise",
            "hex" => "#40E0D0"
        ],
        "violet" => [
            "name" => "Violet",
            "hex" => "#EE82EE"
        ],
        "wheat" => [
            "name" => "Wheat",
            "hex" => "#F5DEB3"
        ],
        "white" => [
            "name" => "White",
            "hex" => "#FFFFFF"
        ],
        "whitesmoke" => [
            "name" => "WhiteSmoke",
            "hex" => "#F5F5F5"
        ],
        "yellow" => [
            "name" => "Yellow",
            "hex" => "#FFFF00"
        ],
        "yellowgreen" => [
            "name" => "YellowGreen",
            "hex" => "#9ACD32"
        ],
    ];

    public static function GetHex(string $name): string
    {
        if ($color = self::DATA[strtolower($name)]) {
            return $color["hex"];
        }
        return "";
    }
}
