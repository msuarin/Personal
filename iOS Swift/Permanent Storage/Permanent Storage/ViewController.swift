//
//  ViewController.swift
//  Permanent Storage
//
//  Created by Mark Suarin on 8/15/15.
//  Copyright © 2015 MarkSuarin. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        
        //NSUserDefaults.standardUserDefaults().setObject("Mark", forKey: "name")
        let userName = NSUserDefaults.standardUserDefaults().objectForKey("name")! as! String
        print(userName)
        
        let array = [1, 2, 3, 4]
        NSUserDefaults.standardUserDefaults().setObject(array, forKey: "myArray")
        let returnedArray = NSUserDefaults.standardUserDefaults().objectForKey("myArray")! as! NSArray
        for x in returnedArray {
            print(x)
        }
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

