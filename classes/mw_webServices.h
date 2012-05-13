//
//  mw_webServices.h
//  imageUpload
//
//  Created by Miguel dos Santos Vaz Dias Wicht on 13.05.12.
//  Copyright (c) 2012 Miguel dos Santos Vaz Dias Wicht. All rights reserved.
//

#import <Foundation/Foundation.h>

@interface mw_webServices : NSObject

- (void) uploadImage:(UIImage *)imageToPost withQuality:(CGFloat)quality andParameters:(NSDictionary *)parameters;
- (void) postData:(NSDictionary *)data;
@end
