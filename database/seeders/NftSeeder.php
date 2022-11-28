<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class NftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nfts')->insert([
            [
                'name' => "Monumental",
                "creator"=> "galbarkan",
                "description"=> "3D digital artwork by Gal Barkan, Galaxy Eggs Genesis collection",
                "external_url"=> "https=>//superrare.com/address/0xb932a70a57673d89f4acffbe830e8ed7f75fb9e0",
                "attributes"=> "ERC-721",
                "price"=> 1.236,
                "image"=> "images/nft-01.jpg",
                "category"=> "collectible"
            ],
             
            
            [ "name"=> "Dream Eater",
            "creator"=> "n8",
            "description"=> "Adobe Medium, 3D scans, AI, C4D, Octane.  ",
            "external_url"=> "https=>//superrare.com/address/0xb932a70a57673d89f4acffbe830e8ed7f75fb9e0",
            "attributes"=> "ERC-721",
            "price"=> 2.5,
            "image"=> "images/nft-02.jpg",
            "category"=> "collectible"],
            [
              "name"=> "THE DIP",
              "creator"=> "bigcomic",
              "description"=> "I fear no man, no beast, no evil, or DIP brother. When Hulk Hogan buys the dip. Digital painting",
              "external_url"=> "https=>//superrare.com/address/0x895e2058bd2a5ecb659956954eced21151f96731",
              "attributes"=> "ERC-721",
              "price"=> 1.494,
              "image"=> "images/nft-03.jpg",
              "category"=> "collectible"
            ],
            [ 

              "name"=> "LUPPY Bc#2384",
              "creator"=> "LUPPYNFTOFFICIAL",
              "description"=> "LUPPY is a collection of 10,000 NFTs created by artists and web 3.0 enthusiasts living in Paris, Dubai and Japan. It is a unique digital collection on the Ethereum blockchain. LUPPY will bring its holders 'Luck' and 'Happiness' and also they will gain access to the membership community, get special gifts and information and participate in exclusive events. LUPPY will also launch a clothing brand and work on creating its own Metaverse in the near future.",
              "external_url"=> "https=>//etherscan.io/address/0x495f947276749ce646f68ac8c248420045cb7b5e",
              "attributes"=> "ERC-1155",
              "price"=> 0.73,
              "image"=> "images/nft-04.jpg",
              "category"=> "collectible"
            ],
            [
              "name"=> "PREMINT Collector Pass",
              "creator"=> "B52A42",
              "description"=> "As a PREMINT Collector Pass holder, you will get access to an evolving collector dashboard and features to keep you on top of the hottest mints. For more info see https=>//collectors.premint.xyz/",
              "external_url"=> "https=>//etherscan.io/address/0xe0176ba60efddb29cac5b15338c9962daee9de0c",
              "attributes"=> "ERC-721",
              "price"=> 0.294,
              "image"=> "images/nft-05.jpg",
              "category"=> "utilitaire"
            ],
            [
              "name"=> "#63057",
              "creator"=> "OthersideDeployer",
              "description"=> "Otherdeed is the key to claiming land in Otherside. Each have a unique blend of environment and sediment — some with resources, some home to powerful artifacts. And on a very few, a Koda roams.",
              "external_url"=> "https=>//etherscan.io/address/0x34d85c9cdeb23fa97cb08333b511ac86e1c4e258",
              "attributes"=> "ERC-721",
              "price"=> 1.09,
              "image"=> "images/nft-06.jpg",
              "category"=> "metaverse"
            ],
            [
              "name"=> "Yokai Kingdom Genesis #5789",
              "creator"=> "YokaiKingdomTeam",
              "description"=> "Yokai Kingdom is a web3 game universe, built on the Ethereum blockchain and inspired by rich, ancient Japanese mythology. 8,888 Genesis hero NFT trading cards is based on Oni (鬼), a fearsome yōkai spirit. Each is the key to unlock the Yokai Kingdom metaverse, including the tactical card game ONI’s QUEST",
              "external_url"=> "https=>//etherscan.io/address/0x35b0ecc952cef736c12a7ef3a830f438f67912b3",
              "attributes"=> "ERC-721",
              "price"=> 0.0249,
              "image"=> "images/nft-07.jpg",
              "category"=> "jeux video online"
            ],
            [
              "name"=> "Yokai Kingdom Genesis #4345",
              "creator"=> "YokaiKingdomTeam",
              "description"=> "Yokai Kingdom is a web3 game universe, built on the Ethereum blockchain and inspired by rich, ancient Japanese mythology. 8,888 Genesis hero NFT trading cards is based on Oni (鬼), a fearsome yōkai spirit. Each is the key to unlock the Yokai Kingdom metaverse, including the tactical card game ONI’s QUEST",
              "external_url"=> "https=>//etherscan.io/address/0x35b0ecc952cef736c12a7ef3a830f438f67912b3",
              "attributes"=> "ERC-721",
              "price"=> 0.1,
              "image"=> "images/nft-08.jpg",
              "category"=> "jeux video online"
            ],
            [
              "name"=> "BoredApeYachtClub #6582",
              "creator"=> "Bored Ape Yacht Club",
              "description"=> "",
              "external_url"=> "https=>//etherscan.io/tx/0x999d620fb7a24cfa20a56c25eca894d438b63eb585f5874918feae3d42f6b133",
              "attributes"=> "ERC-721",
              "price"=> 60.5527,
              "image"=> "images/nft-09.jpg",
              "category"=> "collectible"
            ],
            [
              "name"=> "Pigments #588",
              "creator"=> "Darien_Brito",
              "description"=> "Pigments is an exploration of colour and spatial distortion. Each instance is an abstract representation aimed at evoking a micro or macro-environment; from unknown substances, or oil in a canvas, to nebular formations. The pieces are animated, meant to be experienced live. The piece can run endlessly, with infinite output. To run it smoothly you need a capable GPU. If this proves to be too computationally intensive, or if you prefer a static view, feel free to press the spacebar.",
              "external_url"=> "https=>//etherscan.io/address/0xa7d8d9ef8d8ce8992df33d8b8cf4aebabd5bd270",
              "attributes"=> "ERC-721",
              "price"=> 3,
              "image"=> "images/nft-10.jpg",
              "category"=> "collectible"
            ],
            [
              "name"=> "Droid AK0B61",
              "creator"=> "crea_st",
              "description"=> "1/1 Edition. 2160 x 2700px",
              "external_url"=> "https=>//superrare.com/address/0xb932a70a57673d89f4acffbe830e8ed7f75fb9e0",
              "attributes"=> "ERC-721",
              "price"=> 0.652,
              "image"=> "images/nft-11.jpg",
              "category"=> "collectible"
            ],
            [
              "name"=> "World #6090",
              "creator"=> "NFT Worlds",
              "description"=> "NFT Worlds are generative worlds with geography, resource & feature data stored on chain. NFT Worlds can be played, explored and built in. You can sync changes you make to your world so they reflect on your NFT. Feel free to use NFT Worlds in any way you want. Learn more at nftworlds.com",
              "external_url"=> "https=>//etherscan.io/address/0xbd4455da5929d5639ee098abfaa3241e9ae111af",
              "attributes"=> "ERC-721",
              "price"=> 500,
              "image"=> "images/nft-12.jpg",
              "category"=> "metaverse"
            ],
            [
              "name"=> "Heart of London Deed (Ancient)",
              "creator"=> "0D24DE",
              "description"=> "This Deed allows you to claim the Heart of London Land NFT in Legacy's one and only London Land drop. With only one available, the Heart of London is the unstoppable force in Legacy. Benefit from unrivalled influence!",
              "external_url"=> "https=>//etherscan.io/address/0xbd4455da5929d5639ee098abfaa3241e9ae111af",
              "attributes"=> "ERC-1155",
              "price"=> 3,
              "image"=> "images/nft-13.webp",
              "category"=> "jeux video online"
            ],
            [
              "name"=> "#0217",
              "creator"=> "Admit One",
              "description"=> "Admit One is a 1,000 member private group of Web3 enthusiasts, builders, and thought leaders. The NFT acts as the entry ticket to this diverse and dynamic community. Do dope shit with dope people. To learn more please read the manifesto.",
              "external_url"=> "https=>//etherscan.io/address/0xd2a077ec359d94e0a0b7e84435eacb40a67a817c",
              "attributes"=> "ERC-721",
              "price"=> 4.69,
              "image"=> "images/nft-14.jpg",
              "category"=> "utilitaire"
            ],
            [
              "name"=> "Global Pass",
              "creator"=> "ETHJETS",
              "description"=> "Enjoy your entry into the world of private jet travel. The Global Pass is perfect for those who fly occasionally but still want to enjoy a taste of the perks of a frequent flyer.",
              "external_url"=> "https=>//etherscan.io/address/0x7229600b699dd90b8e7be0575d02db58f409d2cb",
              "attributes"=> "ERC-1155",
              "price"=> 0.53,
              "image"=> "images/nft-15.jpg",
              "category"=> "utilitaire"
            ]
            ]
        );

    }
}
