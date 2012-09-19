<?php

/*
 * Copyright (c) 2012, CONTRIBUTORS.txt
 * All rights reserved.
 *
 * - Redistribution and use in source and binary forms, with or without
 *   modification, are permitted provided that the following conditions are met:
 *
 * - Redistributions of source code must retain the above copyright notice, this
 *   list of conditions and the following disclaimer.
 * - Neither the name of the openmetaverse.org nor the names
 *   of its contributors may be used to endorse or promote products derived from
 *   this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

/*
 * The different types of grid assets
 */
class AssetType 
{
    // Unknown asset type
    const Unknown = -1;

    // Texture asset, stores in JPEG2000 J2C stream format
    const Texture = 0;

    // Sound asset
    const Sound = 1;

    // Calling card for another avatar
    const CallingCard = 2;

    // Link to a location in world
    const Landmark = 3;

    // Legacy script asset, you should never see one of these
    //[Obsolete]
    //const Script = 4;

    // Collection of textures and parameters that can be
    // worn by an avatar
    const Clothing = 5;

    // Primitive that can contain textures, sounds,
    // scripts and more
    const Object = 6;

    // Notecard asset
    const Notecard = 7;

    // Holds a collection of inventory items
    const Folder = 8;

    // Root inventory folder
    const RootFolder = 9;

    // Linden scripting language script
    const LSLText = 10;

    // LSO bytecode for a script
    const LSLBytecode = 11;

    // Uncompressed TGA texture
    const TextureTGA = 12;

    // Collection of textures and shape parameters that can
    // be worn
    const Bodypart = 13;

    // Trash folder
    const TrashFolder = 14;

    // Snapshot folder
    const SnapshotFolder = 15;

    // Lost and found folder
    const LostAndFoundFolder = 16;

    // Uncompressed sound
    const SoundWAV = 17;

    // Uncompressed TGA non-square image, not to be used as a
    // texture
    const ImageTGA = 18;

    // Compressed JPEG non-square image, not to be used as a
    // texture
    const ImageJPEG = 19;

    // Animation
    const Animation = 20;

    // Sequence of animations, sounds, chat, and pauses
    const Gesture = 21;

    // Simstate file
    const Simstate = 22;

    // Contains landmarks for favorites
    const FavoriteFolder = 23;

    // Asset is a link to another inventory item
    const Link = 24;

    // Asset is a link to another inventory folder
    const LinkFolder = 25;

    // Beginning of the range reserved for ensembles
    const EnsembleStart = 26;

    // End of the range reserved for ensembles
    const EnsembleEnd = 45;

    // Folder containing inventory links to wearables and attachments
    // that are part of the current outfit
    const CurrentOutfitFolder = 46;

    // Folder containing inventory items or links to
    // inventory items of wearables and attachments
    // together make a full outfit
    const OutfitFolder = 47;

    // Root folder for the folders of type OutfitFolder
    const MyOutfitsFolder = 48;

    // Linden mesh format
    const Mesh = 49;

    // Marketplace direct delivery inbox ("Received Items")
    const Inbox = 50;

    // Marketplace direct delivery outbox
    const Outbox = 51;

    const BasicRoot = 51;
}

// 
// Inventory Item Types, eg Script, Notecard, Folder, etc
// 
class InventoryType 
{
    // Unknown
    const Unknown = -1;

    // Texture
    const Texture = 0;

    // Sound
    const Sound = 1;

    // Calling Card
    const CallingCard = 2;

    // Landmark
    const Landmark = 3;

    /*
     // Script
     //[Obsolete("See LSL")] Script = 4,
     // Clothing
     //[Obsolete("See Wearable")] Clothing = 5,
     // Object, both single and coalesced
     */

    const Object = 6;

    // Notecard
    const Notecard = 7;

    // 
    const Category = 8;

    // Folder
    const Folder = 8;

    // 
    const RootCategory = 9;

    // an LSL Script
    const LSL = 10;

    /*
     // 
     //[Obsolete("See LSL")] LSLBytecode = 11,
     // 
     //[Obsolete("See Texture")] TextureTGA = 12,
     // 
     //[Obsolete] Bodypart = 13,
     // 
     //[Obsolete] Trash = 14,
     */

    // 
    const Snapshot = 15;

    /*
     // 
     //[Obsolete] LostAndFound = 16,
     */

    // 
    const Attachment = 17;

    // 
    const Wearable = 18;

    // 
    const Animation = 19;

    // 
    const Gesture = 20;

    // 
    const Mesh = 22;
}

// 
// Item Sale Status
// 
class SaleType 
{
    // Not for sale
    const Not = 0;

    // The original is for sale
    const Original = 1;

    // Copies are for sale
    const Copy = 2;

    // The contents of the object are for sale
    const Contents = 3;
}

// 
// Types of wearable assets
// 
class WearableType 
{
    // Body shape
    const Shape = 0;
    
    // Skin textures and attributes
    const Skin = 1;
    
    // Hair
    const Hair = 2;
    
    // Eyes
    const Eyes = 3;
    
    // Shirt
    const Shirt = 4;
    
    // Pants
    const Pants = 5;
    
    // Shoes
    const Shoes = 6;
    
    // Socks
    const Socks = 7;
    
    // Jacket
    const Jacket = 8;
    
    // Gloves
    const Gloves = 9;
    
    // Undershirt
    const Undershirt = 10;
    
    // Underpants
    const Underpants = 11;
    
    // Skirt
    const Skirt = 12;
    
    // Alpha mask to hide parts of the avatar
    const Alpha = 13;
    
    // Tattoo
    const Tattoo = 14;
    
    // Physics
    const Physics = 15;
    
    // Invalid wearable asset
    const Invalid = 255;
}

?>